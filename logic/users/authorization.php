<?php
require_once $_SERVER['DOCUMENT_ROOT']."/models/session.php";
require_once $_SERVER['DOCUMENT_ROOT']."/models/user.php";

$title = "Sign in";
$view_name = "/views/users/sign_in";
// $view_name = "/views/users/authorization";
$email = $_POST['email'];
$password = $_POST['password'];
$user_id = htmlspecialchars($_COOKIE["user_id"]);
$random_hash = htmlspecialchars($_COOKIE["random_hash"]);
if (isset($email) and isset($password)){
  $user = new User(array("email"=>$email, "password"=>$password));
  if($user->validate()){
    $session = new Session(array("user_id"=>$user->id));
    $session->save();
    // header("Location:"."/index.php");
  }
}

require $_SERVER['DOCUMENT_ROOT']."/views/layouts/layout.php";
