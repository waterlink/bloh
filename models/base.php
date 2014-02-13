<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/lib/connect.php';

function AsKeyKey ($data, $divider) {
  $result = array();
  foreach ($data as $key => $value) {
    $result[] = $key.' = :'.$key;
  }
  return implode($divider, $result);
}

function AsKeyValue ($data, $divider) {
  $result = array();
  foreach ($data as $key => $value) {
    $result[] = $key.' = '.$value;
  }
  return implode($divider, $result);
}


class Base {

  public $id, $title, $content, $created_at, $updated_at;
  public $_columns = array('id', 'title', 'content', 'created_at', 'updated_at');
  public static $class_name, $table_name, $db, $sequence_id;


  function __construct($data = array()) {
    global $db;
    $class_name = get_called_class();
    foreach ($class_name::$columns as $column) {
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

  static function where ($columns = array()) {
    global $db;
    $class_name = get_called_class();
    $data = array();
    $sql = "select * from ".$class_name::$table_name.' where '.AsKeyKey($columns, ' and ');
    $q = $db->prepare($sql);
    $q->execute($columns);
    while ($res = $q->fetch()) {
      array_push($data, new $class_name($res));
    }
    return $data;
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
      $sql = 'insert into '.$class_name::$table_name.' ('.implode(", ", $class_name::$columns).') values (:'.implode(", :",$class_name::$columns).')';
      $next_id = $db->query("select nextval('".$class_name::$sequence_id."')")->fetch();
      $this->id = $next_id[0];
    } else {
      $sql = "update ".$class_name::$table_name." set ".AsKeyValue($class_name::$columns, ',')." where id=:id";
    }
    $q = $db->prepare($sql);
    $exec_array = array();
      foreach ($class_name::$columns as $column) {
        $exec_array[$column] = $this->$column;
      }
      if (!$q->execute($exec_array)) {
        var_dump($q->errorInfo());
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
