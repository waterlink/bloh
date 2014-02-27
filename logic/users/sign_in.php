<?php
require_once $_SERVER['DOCUMENT_ROOT']."/models/session.php";
require_once $_SERVER['DOCUMENT_ROOT']."/models/user.php";
$email = $_POST['email'];
$password = $_POST['password'];
if (isset($email) and isset($password)){
  $user = new User(array("email"=>$email, "password"=>$password));
  if ($user->validate()){
    $session = new Session(array("user_id"=>$user->id));
    $session->save();
  }
}
// header('Location:'.'/index.php');
