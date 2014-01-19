<?php
require_once $_SERVER['DOCUMENT_ROOT']."/models/post.php";
require_once $_SERVER['DOCUMENT_ROOT']."/lib/helpers.php";
$method = $_POST['method'];
$id = $_GET['id'];
$post = Post::find($id);
$post->title = $_POST['title'];
$post->content = $_POST['content'];
if ($method == "put") {
  $post->save();
  redirect($post->get_url());
}
$view_name = 'views/posts/edit';
$title = 'Edit Post';
$post = Post::find($id = $_GET['id']);
require $_SERVER['DOCUMENT_ROOT'].'/views/layouts/layout.php';
