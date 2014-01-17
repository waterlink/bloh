<?php
require_once "models.php";
$method = $_POST['method'];
$id = $_GET['id'];
$post = Post::find($id);
if ($method == "put") {
  $post->title = $_POST['title'];
  $post->content = $_POST['content'];
  $post->save();
  header('Location: /views.php?id='.$post->id);
  exit();
}
?>
<form action="edit_post_view.php?id=<?= $post->id?>" method="POST">
  <input type="hidden" name="method" value="put">
  <span>
    Post title: <input type="text" cols="50" name="title" value="<?= $post->title?>">
  </span>
  <br>
  <span style="vertical-align: top">
    Post content:
    <textarea rows="4" cols="50"
        name="content"><? echo $post->content?></textarea>
  </span>
  <br>
  <button>Edit post</button>
</form>

<a href="/views.php">All posts</a>
