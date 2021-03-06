<?php
require_once $_SERVER['DOCUMENT_ROOT']."/models/post.php";
require_once $_SERVER['DOCUMENT_ROOT']."/lib/helpers.php";
$view_name = 'views/posts/new';
$title = 'New Post';
$post_title = $_POST['title'];
$post_content = $_POST['content'];
if (isset($post_title) and isset($post_content)) {
  $now = date('Y-m-d H:i:s');
  $post = new Post(array('user_id'=>$_COOKIE['user_id'], "title"=>$post_title, "content"=>$post_content, "created_at"=>$now, "updated_at"=>$now));
  $post->save();
  header('Location:'.get_absolute_url('/views/posts/show.php?id='.$post->id), true, 302);
  exit();
}
require $_SERVER['DOCUMENT_ROOT'].'/views/layouts/layout.php';
?>
