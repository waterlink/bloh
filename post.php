<?php
require_once "models.php";
$method =$_POST['method'];
if ($method == 'delete') {
  $post = Post::find($_GET['id']);
  $post->destroy();
  header('Location:'.Post::get_index_url());
  exit();
}

?>
  <form action="post.php?id=<?=$post->id?>" method="post">
    <input type="hidden" name="method" value="delete">
    <article>
      <h1><?= $post->title ?></h1>
      <div><?= $post->content ?></div>
      <button>Remove Post</button>
    </article>
  </form>
  <a href="<?=Post::get_index_url()?>">All posts</a>
