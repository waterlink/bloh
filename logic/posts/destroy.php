<?php
require_once $_SERVER['DOCUMENT_ROOT']."/helpers.php";
require_once $_SERVER['DOCUMENT_ROOT']."/models/post.php";
$method =$_POST['method'];
if ($method == 'delete') {
  $post = Post::find($_GET['id']);
  $post->destroy();
  redirect(Post::get_index_url());
}
