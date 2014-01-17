<?php
require_once "models.php";
?>
<form action="edit.php?id=<?= $post->id?>" method="POST">
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
  <button>Save</button>
</form>

<a href="/show.php">All posts</a>
