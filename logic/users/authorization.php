<?php
require_once $_SERVER['DOCUMENT_ROOT']."/models/user.php";
$title = "Sign in";
$view_name = "/views/users/authorization";
$email = $_POST['email'];
$password = $_POST['password'];
if (isset($email) and isset($password)){
  $user = new User(array("email"=>$email, "password"=>$password));
  if($user->validate()){
  }
}
require $_SERVER['DOCUMENT_ROOT']."/views/layouts/layout.php";
?>
