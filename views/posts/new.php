<?php ob_start();
require_once $_SERVER['DOCUMENT_ROOT']."/models/post.php";
require_once $_SERVER['DOCUMENT_ROOT']."/lib/helpers.php";
?>
<form action="/logic/posts/new.php" method="POST">
  <span>
    Post title: <input type="text" cols="50" name="title">
  </span>
  <br>
  <span style="vertical-align: top">
    Post content: <textarea rows="4" cols="50" name="content"></textarea>
  </span>
  <br>
<button>Add new post</button>
</form>

<a href="/views/posts/index.php">All posts</a>

<? ob_end_flush() ?>
