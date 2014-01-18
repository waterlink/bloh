<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/connect.php';

class Post {

  public $id, $title, $content, $created_at, $updated_at;
  public $_columns = array('id', 'title', 'content', 'created_at', 'updated_at');

  // Find one, find all, post one

  function __construct($data = array()) {
    foreach ($this->_columns as $column) {
      if (isset($data[$column])) {
        $this->$column = $data[$column];
      }
    }
  }

  static function find ($id) {
    global $db;
    $sql = "select * from post where id = :id";
    $q = $db->prepare($sql);
    $q->execute(array(':id' => $id));
    $res = $q->fetch();
    if ($res) {
      return new Post($res);
    } else {
      return NULL;
    }
  }

  static function all () {
    global $db;
    $posts = array();
    $sql = "select * from post";
    $q = $db->prepare($sql);
    $q->execute();
    while ($res = $q->fetch()) {
      array_push($posts, new Post($res));
    }
    return $posts;
  }

  function save () {
    global $db;
    if (is_null($this->id)) {
      $this->created_at = date('Y-m-d H:i:s');
      $this->updated_at = $this->created_at;
      $sql = 'insert into post (id, title, content, created_at, updated_at) values (:id, :title, :content, :created_at, :created_at)';
      $next_id = $db->query("select nextval('bloh_post_id_seq')")->fetch();
      $this->id = $next_id[0];
      $q = $db->prepare($sql);
      $data = array(':id'=>$this->id,
                    ':title'=>$this->title,
                    ':content'=>$this->content,
                    ':created_at'=>$this->created_at);
      if (!$q->execute($data)) {
        var_dump($q->errorInfo());
      }
    } else {
      $this->updated_at = date('Y-m-d H:i:s');
      $sql = "update post set title = :title, content = :content, updated_at = :updated_at where id=:id";
      $q = $db->prepare($sql);
      $q->execute(array(":title"=>$this->title,
                        ":content"=>$this->content,
                        ":updated_at"=>$this->updated_at,
                        ":id"=>$this->id));
    }
  }
  function get_url() {
    return "/show.php?id=".$this->id;
  }

  function destroy() {
    global $db;
    $sql = "delete from post where id = :id";
    $q = $db->prepare($sql);
    $data = array(":id"=>$this->id);
    if (!$q->execute($data)) {
      var_dump($q->errorInfo());
    }
  }

  static function get_index_url() {
    return "/show.php";
  }
}
