<?php
require_once $_SERVER['DOCUMENT_ROOT']."/models/comment.php";
?>
<article>
  <div><?=$comment->content?></div>
  <div><?=$comment->updated_at?></div>
  <!-- <time class="pool-right">Updated at</time> -->
</article>
<? require_once $_SERVER['DOCUMENT_ROOT']."/views/comments/comments.php"?>
