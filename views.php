<?php
require_once "models.php";
$post = Post::find(26);
?>
<!doctype html>
<html>
  <head>
    <title><?= $post->title ?> - Bloh!</title>
  </head>
  <body>
  <article>
    <h1><?= $post->title ?></h1>
    <div><? $post->content ?></div>
  </article>
  </body>
</html>
