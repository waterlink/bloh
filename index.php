<?
// $user_id = $_COOKIE['user_id'];
// $random_hash = $_COOKIE['random_hash'];

if (isset($user_id) and isset($random_hash)){
  $sessions = Session::where(array("user_id"=>$user_id, "random_hash"=>$random_hash));
  // var_dump($sessions[0]);
  // echo "You signed in";
}
else{
  require_once $_SERVER['DOCUMENT_ROOT']."/views/users/index.php";
}
?>
