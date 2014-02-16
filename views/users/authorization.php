<?php
?>
<div class="authorization-body">
  <form action="/logic/users/authorization.php" method="POST">
    <div class="row">
      <label>Username:&nbsp;</label>
      <input type="text" name="email">
    </div>
    <div class="row">
      <label>Password:&nbsp;&nbsp;</label>
      <input type="password" name="password">
    </div>
    <button class="btn custom primary">Sign in</button>
  </form>
</div>
