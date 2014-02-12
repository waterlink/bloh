<?php
require_once $_SERVER['DOCUMENT_ROOT']."/models/user.php";
$title = "Sign up";
$view_name = "/views/users/registration";
$email = $_POST['email'];
$password = $_POST['password'];
$password_again = $_POST['password_again'];
if (isset($email) and isset($password) and isset($password_again)) {
  if (strcmp($password, $password_again) == 0){
    $user = User::where(array('email'=>$email));
    if($user[0]->id == '') {
      $user = new User(array('email'=>$email, 'password'=>$password));
      // $user->save();
    }
  }
  else {
  }
}
require $_SERVER['DOCUMENT_ROOT']."/views/layouts/layout.php";
?>
