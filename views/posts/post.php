<?php
require_once $_SERVER['DOCUMENT_ROOT']."/lib/helpers.php";
require_once $_SERVER['DOCUMENT_ROOT']."/models/post.php";
?>
  <div class="post-container">
    <article>
      <div class="row">Author: <?=User::find($post->user_id)->email?></div>
        <div class="row">
          <h2 class="pool-left"><?= $post->title ?></h2>
          <time class="pool-right"><i>updated at <?= $post->updated_at?></i>
          </time>
        </div>
        <div class="row">
          <div class="post-content"><?= $post->content ?></div>
          <div class="row">
            <form action="/logic/posts/destroy.php?id=<?=$post->id?>" method="post">
              <input type="hidden" name="method" value="delete">
              <input type="hidden" name="post_id" value="<?=$post->id?>">
              <?if (isset($user) and $post->id == $user->id){?>
              <button class="btn custom err">Remove Post</button>
              <?}?>
            </form>
            <?if (isset($user) and $post->id == $user->id){?>
            <a class="btn custom main" role="button"
              href="/logic/posts/edit.php?id=<?= $post->id?>">Edit post</a>
            <?}?>
          </div>
        </div>
        <?
          if(isset($user)){
            require $_SERVER['DOCUMENT_ROOT'].'/views/comments/index.php';
          }
        ?>
    </article>
    <a href="<?=Post::get_index_url()?>">All posts</a>
  </div>
