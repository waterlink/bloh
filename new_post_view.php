<?php ob_start();
require_once "models.php";
require_once "helpers.php";
$title = $_POST['title'];
$content = $_POST['content'];
if (isset($title) and isset($content)) {
  $post = new Post(array("title"=>$_POST['title'], "content"=>$_POST['content']));
  $post->save();
  header('Location:'.get_absolute_url('/views.php?id='.$post->id), true, 302);
  exit();
}

?>
<form action="new_post_view.php" method="POST">
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

<a href="/views.php">All posts</a>

<? ob_end_flush() ?>
