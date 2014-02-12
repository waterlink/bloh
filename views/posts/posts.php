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
  <a href="/logic/posts/new.php">Add post</a>
</div>
