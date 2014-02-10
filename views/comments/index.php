<?php
require_once $_SERVER['DOCUMENT_ROOT']."/models/comment.php";
$comments = Comment::where(array("post_id"=>84));
require $_SERVER['DOCUMENT_ROOT'].'/views/comments/comments.php';
?>
)
