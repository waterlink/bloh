<?php
require_once "helpers.php";
require_once "models.php";
$method =$_POST['method'];
if ($method == 'delete') {
  $post = Post::find($_GET['id']);
  $post->destroy();
  redirect(Post::get_index_url());
}
