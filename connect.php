<?php

$dsn = "pgsql"
      .":host=localhost"
      .";dbname=bloh"
      .";user=bloh"
      .";port=5432"
      .";password=bloh";

$db = new PDO($dsn);

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

$post =  new Post();
Post::all();
$post->save("Pizdets");
Post::find("Huets");
