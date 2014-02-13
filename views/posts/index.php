<?php
require_once $_SERVER['DOCUMENT_ROOT']."/models/post.php";
$posts = Post::all();
$title = "All posts";
$view_name = "/views/posts/posts";
require $_SERVER['DOCUMENT_ROOT']."/views/layouts/layout.php";
?>
