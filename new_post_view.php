<?
require_once "models.php";
// echo "title: ".$_POST['title'];
// echo "content: ".$_POST['content'];
$title = $_POST['title'];
$content = $_POST['content'];
if (isset($title) and isset($content)) {
  $post = new Post(array("title"=>$_POST['title'], "content"=>$_POST['content']));
  $post->save();
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
