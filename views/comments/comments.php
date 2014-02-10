<?php ob_start();
require_once $_SERVER['DOCUMENT_ROOT']."/models/post.php";
require_once $_SERVER['DOCUMENT_ROOT'].'/models/comment.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/lib/helpers.php';
?>
<section>
  <h2>Comments</h2>
<?
  foreach ($comments as $comment) {
?>
  <? require $_SERVER['DOCUMENT_ROOT'].'/views/comments/comment.php'?>
<?
}
?>
  <form action="/logic/comments/new.php" method="POST">
    <input type="hidden" name="post_id" value="<?= $post->id ?>">
    <textarea rows="4" cols="50" name="comment"></textarea>
    <button>Add comment</button>
  </form>
</section>
<? ob_end_flush() ?>
