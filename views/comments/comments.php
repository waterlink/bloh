<section>
  <h2>Comments</h2>
<?
  foreach ($comments as $comment) {
?>
  <article>Comment</article>
<?
}
?>
  <form>
    <textarea rows="4" cols="50" name="comment"></textarea>
    <button>Add comment</button>
  </form>
</section>
