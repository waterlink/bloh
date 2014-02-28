<div class="post-container">
  <ul>
  <?
    foreach ($posts as $post) {
  ?>
    <li>
      <a href="<?= $post->get_url() ?>"><?= $post->title ?></a>
    </li>
  <?
    }
  ?>
  </ul>
  <?if(isset($user)){?>
  <a href="/logic/posts/new.php">Add post</a>
  <?}?>
</div>
