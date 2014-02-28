<?php
require_once $_SERVER['DOCUMENT_ROOT']."/models/comment.php";
?>
<article>
  <div>
    <span><?=User::find($comment->user_id)->email?></span>&nbsp;
    <span class="pool-right"><?=$comment->created_at?></spans>
  </div>
  <div><?=$comment->content?></div>
  <hr/>
</article>
