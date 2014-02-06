<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/lib/connect.php';

class Base {

  public $id, $title, $content, $created_at, $updated_at;
  public $_columns = array('id', 'title', 'content', 'created_at', 'updated_at');
  public static $class_name, $table_name, $db, $sequence_id;


  function __construct($data = array()) {
    global $db;
    foreach ($this->_columns as $column) {
      if (isset($data[$column])) {
        $this->$column = $data[$column];
      }
    }
  }

  static function find ($id) {
    global $db;
    $class_name = get_called_class();
    $sql = "select * from ".$class_name::$table_name." where id = :id";
    $q = $db->prepare($sql);
    $q->execute(array(':id' => $id));
    $res = $q->fetch();
    if ($res) {
      return new $class_name($res);
    } else {
      return NULL;
    }
  }

  static function all () {
    global $db;
    $class_name = get_called_class();
    $data = array();
    $sql = "select * from ".$class_name::$table_name;
    $q = $db->prepare($sql);
    $q->execute();
    while ($res = $q->fetch()) {
      array_push($data, new $class_name($res));
    }
    return $data;
  }

  function save () {
    global $db;
    $class_name = get_called_class();
    if (is_null($this->id)) {
      $this->created_at = date('Y-m-d H:i:s');
      $this->updated_at = $this->created_at;
      $sql = 'insert into '.$class_name::$table_name.' (id, title, content, created_at, updated_at) values (:id, :title, :content, :created_at, :created_at)';
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
      $sql = "update ".$class_name::$table_name." set title = :title, content = :content, updated_at = :updated_at where id=:id";
      $q = $db->prepare($sql);
      $q->execute(array(":title"=>$this->title,
                        ":content"=>$this->content,
                        ":updated_at"=>$this->updated_at,
                        ":id"=>$this->id));
    }
  }
  function get_url() {
    return "/views/posts/show.php?id=".$this->id;
  }

  function destroy() {
    global $db;
    $class_name = get_called_class();
    $sql = "delete from ".$class_name::$table_name." where id = :id";
    $q = $db->prepare($sql);
    $data = array(":id"=>$this->id);
    if (!$q->execute($data)) {
      var_dump($q->errorInfo());
    }
  }

  static function get_index_url() {
    return "/views/posts/index.php";
  }
}
