<?php
require_once "models.php";
$id = $_GET['id'];
if ($id == NULL){
  $posts = Post::all();
} else {
  $post = Post::find($id);
}
?>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="index.js"></script>
    <title><?
    if (isset($post)) {
      echo $post->title;
      $view_name = "post";
    }
    else if (isset($posts)) {
      echo "All posts";
      $view_name = "posts";
    }
    else {
      echo "Posts don`t found";
    }
    ?> - Bloh!</title>
  </head>
  <body>
    <?
      require_once $view_name.".php";
    ?>
  </body>
