<?php
require_once "models.php";
$view_name = 'edit_post_view';
$title = 'Edit Post';
$post = Post::find($id = $_GET['id']);
require 'layout.php';
