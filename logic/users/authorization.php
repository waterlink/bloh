<?php
require_once $_SERVER['DOCUMENT_ROOT']."/models/session.php";
require_once $_SERVER['DOCUMENT_ROOT']."/models/user.php";

$user_id = $_COOKIE['user_id'];
$random_hash = $_COOKIE['random_hash'];
if (isset($user_id) and isset($random_hash)){
  $session = Session::where(array('user_id' => $user_id, 'random_hash'=> $random_hash))[0];
  if (count($session) == 0) {
    setcookie("user_id", "", -1);
    setcookie("random_hash", "", -1);
    header("Location:"."/index.php");
  }

  if ($session->is_actual()){
    $user = User::find($user_id);
  }
}
