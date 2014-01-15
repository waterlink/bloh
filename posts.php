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

<a href="/new_post_view.php">Add post</a>
