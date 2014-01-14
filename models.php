<?php

require_once 'connect.php';

class Post {

  public $id, $title, $content, $created_at;

  // Find one, find all, post one

  function __construct($data = array()) {
    $this->title = $data['title'];
    $this->content = $data['content'];
  }

  static function find ($id) {
    echo "Dick\n";
  }

  static function all () {
    echo "Suck\n";
  }

  function save () {
    global $db;
    if (is_null($this->id)) {
      $this->created_at = time();
      $this->updated_at = $this->created_at;
      $sql = 'insert into post (id, title, content, created_at, updated_at) values (:id, :title, :content, :created_at, :created_at)';
      $q = $db->prepare($sql);
      $this->id = $db->query("select nextval('bloh_post_id_seq')")->fetch();
      $q->execute(array(':id'=>$this->id,
                        ':title'=>$this->title,
                        ':content'=>$this->content,
                        ':created_at'=>$this->created_at));
    } else {
      $this->updated_at = time();
      $sql = "update post set title = :title, content = :content, updated_at = :updated_at where id=:id";
      $q = $db->prepare($sql);
      $q->execute(array(":title"=>$this->title,
                        ":content"=>$this->content,
                        ":updated_at"=>$this->updated_at,
                        ":id"=>$this->id));
    }
  }

}
$post = new Post(array('title'=>"Bga", 'content'=>"first post"));
$post->save();
