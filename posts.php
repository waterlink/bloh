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
