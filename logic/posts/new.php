<?php
require_once $_SERVER['DOCUMENT_ROOT']."/models/post.php";
require_once $_SERVER['DOCUMENT_ROOT']."/helpers.php";
$view_name = 'views/posts/new';
$title = 'New Post';
$title = $_POST['title'];
$content = $_POST['content'];
if (isset($title) and isset($content)) {
  $post = new Post(array("title"=>$_POST['title'], "content"=>$_POST['content']));
  $post->save();
  header('Location:'.get_absolute_url('/show.php?id='.$post->id), true, 302);
  exit();
}
require $_SERVER['DOCUMENT_ROOT'].'/layout.php';
?>
