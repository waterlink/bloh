<?php
require_once "models.php";
require_once "helpers.php";
$view_name = 'new_post_view';
$title = 'New Post';
$title = $_POST['title'];
$content = $_POST['content'];
if (isset($title) and isset($content)) {
  $post = new Post(array("title"=>$_POST['title'], "content"=>$_POST['content']));
  $post->save();
  header('Location:'.get_absolute_url('/show.php?id='.$post->id), true, 302);
  exit();
}
require 'layout.php';
?>
