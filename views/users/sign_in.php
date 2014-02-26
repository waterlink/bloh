<?php ob_start();?>
<div class="authorization-body">
  <div class="row">
    <form action="/logic/users/authorization.php" method="POST">
      <label>Username:&nbsp;</label>
      <input type="text" name="email">
      <label>Password:&nbsp;&nbsp;</label>
      <input type="password" name="password">
      <button class="btn custom primary">Sign in</button>
    </form>
    <a href="/logic/users/new.php">Sign up for bloh</a>
  </div>
</div>
<?ob_end_flush();?>
