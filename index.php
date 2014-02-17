<?
$user_id = $_COOKIE['user_id'];
$random_hash = $_COOKIE['random_hash'];

if (isset($user_id) and isset($random_hash)){
  require_once $_SERVER['DOCUMENT_ROOT']."/views/posts/index.php";
}
else{
  require_once $_SERVER['DOCUMENT_ROOT']."/views/users/index.php";
}
