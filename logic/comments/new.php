<?php
require_once $_SERVER['DOCUMENT_ROOT']."/models/comment.php";
require_once $_SERVER['DOCUMENT_ROOT']."/lib/helpers.php";
$data = json_decode(file_get_contents('php://input'));
$content = $data->comment;
if (isset($content)) {
  $post_id = $data->post_id;
  $now = date('Y-m-d H:i:s');
  $comment = new Comment(array('user_id'=>$_COOKIE['user_id'],"post_id"=>$post_id, "content"=>$content, "created_at"=>$now));
  $comment->save();
  $comments = Comment::where(array("post_id"=>$post_id));
  foreach ($comments as $comment) {
    require $_SERVER['DOCUMENT_ROOT'].'/views/comments/comment.php';
  }
}
?>
