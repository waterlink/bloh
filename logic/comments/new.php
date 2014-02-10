<?php
require_once $_SERVER['DOCUMENT_ROOT']."/models/comment.php";
require_once $_SERVER['DOCUMENT_ROOT']."/lib/helpers.php";
$content = $_POST['comment'];
if (isset($content)) {
  $post_id = $_POST['post_id'];
  $now = date('Y-m-d H:i:s');
  $comment = new Comment(array("post_id"=>$post_id, "content"=>$content, "created_at"=>$now));
  $comment->save();
}
header('Location:'.get_absolute_url('/views/posts/show.php?id='.$post_id), true, 302);
?>
