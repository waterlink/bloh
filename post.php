  <article>
    <h1><?= $post->title ?></h1>
    <div><?= $post->content ?></div>
  </article>
  <a href="<?=Post::get_index_url()?>">All posts</a>
