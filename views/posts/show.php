<?php
require_once $_SERVER['DOCUMENT_ROOT']."/models/post.php";
$view_name = "/views/";
$id = $_GET['id'];

$post = Post::find($id);

if (isset($post)) {
  $title = $post->title;
  $view_name = $view_name."posts/post";
}

else {
  $title = "Posts don`t found";
  $view_name = $view_name."errors/404";
  header('HTTP/1.1 404 Not Found');
}
require $_SERVER['DOCUMENT_ROOT']."/views/layouts/layout.php";
?>
