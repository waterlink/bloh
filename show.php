<?php
require_once "models.php";
$id = $_GET['id'];
if ($id == NULL){
  $posts = Post::all();
} else {
  $post = Post::find($id);
}
if (isset($post)) {
  $title = $post->title;
  $view_name = "post";
}
else if (isset($posts)) {
  $title = "All posts";
  $view_name = "posts";
}
else {
  $title = "Posts don`t found";
  $view_name = "not_found";
  header('HTTP/1.1 404 Not Found');
}
require "layout.php";
?>
