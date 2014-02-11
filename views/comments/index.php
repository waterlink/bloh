<?php
require_once $_SERVER['DOCUMENT_ROOT']."/models/comment.php";
$comments = Comment::where(array("post_id"=>$post->id));
require $_SERVER['DOCUMENT_ROOT'].'/views/comments/comments.php';
?>
