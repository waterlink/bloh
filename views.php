<?php
require_once "models.php";
$id = $_GET['id'];
if ($id == NULL){
  $posts = Post::all();
} else {
  $post = Post::find($id);
}
?>
<!doctype html>
<html>
  <head>
    <title><?
    if (isset($post)) {
      echo $post->title;
    }
    else if (isset($posts)) {
      echo "All posts";
    }
    else {
      echo "Posts don`t found";
    }
    ?> - Bloh!</title>
  </head>
  <body>
    <?
      if (isset($post)) {
        require_once "post.php";
      } else {
        require_once "posts.php";
      }
    ?>
  </body>
</html>
