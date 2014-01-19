<?php
require_once $_SERVER['DOCUMENT_ROOT']."/lib/helpers.php";
require_once $_SERVER['DOCUMENT_ROOT']."/models/post.php";
?>
  <form action="logic/posts/destroy.php?id=<?=$post->id?>" method="post">
    <input type="hidden" name="method" value="delete">
    <article>
      <h1><?= $post->title ?></h1>
      <div><?= $post->content ?></div>
      <div><i>updated at <?= $post->updated_at?></i></div>
      <button>Remove Post</button>
      <a href="logic/posts/edit.php?id=<?= $post->id?>">Edit post</a>
    </article>
  </form>
  <a href="<?=Post::get_index_url()?>">All posts</a>
