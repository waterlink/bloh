<?php
ob_start();
require_once $_SERVER['DOCUMENT_ROOT']."/models/user.php";
require_once $_SERVER['DOCUMENT_ROOT']."/models/session.php";

$title = "Sign in";
$view_name = "/views/users/authorization";
$email = $_POST['email'];
$password = $_POST['password'];
if (isset($email) and isset($password)){
  var_dump($email);
  $user = new User(array("email"=>$email, "password"=>$password));
  if($user->validate()){
    var_dump($user);
    $session = new Session(array("user_id"=>$user->id));
    $session->save();
    header("Location:"."/index.php");
  }
}
require $_SERVER['DOCUMENT_ROOT']."/views/layouts/layout.php";
ob_end_flush();
?>
