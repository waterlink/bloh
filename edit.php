<?php
require_once "./models.php";
require_once "./helpers.php";
$method = $_POST['method'];
$id = $_GET['id'];
$post = Post::find($id);
$post->title = $_POST['title'];
$post->content = $_POST['content'];
if ($method == "put") {
  $post->save();
  redirect($post->get_url());
}
$view_name = 'edit_post_view';
$title = 'Edit Post';
$post = Post::find($id = $_GET['id']);
require 'layout.php';
