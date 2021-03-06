<?php ob_start();
require_once $_SERVER['DOCUMENT_ROOT']."/models/post.php";
require_once $_SERVER['DOCUMENT_ROOT'].'/models/comment.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/lib/helpers.php';
?>
<section>
  <h2>Comments</h2>
  <div class="comments_container">
    <?
      foreach ($comments as $comment) {
        require $_SERVER['DOCUMENT_ROOT'].'/views/comments/comment.php';
    }
    ?>
  </div>
  <hr />
  <div class="inlineflex">
    <input type="hidden" name="post_id" value="<?= $post->id ?>">
    <textarea rows="4" cols="60" name="comment"></textarea>
    <button class="btn custom ok" onClick="javascript:post_comment()">Add comment</button>
  </div>
</section>
<? ob_end_flush() ?>
