<?php
require_once $_SERVER['DOCUMENT_ROOT']."/lib/helpers.php";
require_once $_SERVER['DOCUMENT_ROOT']."/models/post.php";
$method =$_POST['method'];
if ($method == 'delete') {
  $post = Post::find($_POST['post_id']);
  $post->destroy();
  redirect(Post::get_index_url());
}
