<?php?>
<div class="authorization-body">
  <form action="/logic/users/new.php" method="POST">
    <div class="row">
      <label>Username:&nbsp;</label>
      <input type="text" name="email">
    </div>
    <div class="row">
      <label>Password:&nbsp;&nbsp;</label>
      <input type="password" name="password">
    </div>
    <div class="row">
      <label>Password agin:&nbsp;</label>
      <input type="password" name="password_again">
    </div>
    <button class="btn custom primary">Sign up</button>
  </form>
</div>
<??>
