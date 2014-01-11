<?php

require_once 'connect.php';

class Post {
  public $title, $content, $date;
  // Find one, find all, post one
  static function find ($id) {
    echo "Dick\n";
  }

  static function all () {
    echo "Suck\n";
  }

  function save ($content) {
    echo "My\n";
  }
}
