<??>
<div class="authorization-body">
  <div class="row">
      <label>Username:&nbsp;</label>
      <input type="text" name="email" value="<?= $user->email?>" disabled>
      <label>Password:&nbsp;&nbsp;</label>
      <input type="password" name="password" value="11112222" disabled>
      <form action="/logic/users/log_out.php" method="POST">
      <input type="hidden" name="session_id" value="<?=$session->id?>">
      <button class="btn custom primary">Log out</button>
    </form>
    <a href="/logic/users/new.php">Sign up for bloh</a>
  </div>
</div>
