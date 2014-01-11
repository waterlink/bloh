<?php

require_once 'connect.php';

class Post {

  public $title, $content, $created_at;

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

  function save ($content) {

  }

}
