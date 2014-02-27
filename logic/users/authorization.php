<?php
require_once $_SERVER['DOCUMENT_ROOT']."/models/session.php";
require_once $_SERVER['DOCUMENT_ROOT']."/models/user.php";

$user_id = $_COOKIE['user_id'];
$random_hash = $_COOKIE['random_hash'];
echo "user_id: ".$user_id;
echo "random_hash".$random_hash;
if (isset($user_id) and isset($random_hash)){
  $sessions = Session::where(array('user_id' => $user_id, 'random_hash'=> $random_hash));
  echo "Array";
  var_dump($sessions);
  echo "session: ".count($sessions);
  // if (count($session) == 0) {
  //   setcookie("user_id", "", -1);
  //   setcookie("random_hash", "", -1);
  //   header("Location:"."/index.php");
  // }

  if ($session->is_actual()){
    $user = User::find($user_id);
    // require_once $_SERVER['DOCUMENT_ROOT'].'/views/users/signed';
  }
  // require_once $_SERVER['DOCUMENT_ROOT']."/views/users/sign_in.php";
}
else {
  $user = null;
}
  // require_once $_SERVER['DOCUMENT_ROOT']."/views/users/index.php";
// $user_id = $_COOKIE['user_id'];
// $random_hash = $_COOKIE['random_hash'];
// $view_name = "/views/users/sign_in";
// // $view_name = "/views/users/authorization";
// $email = $_POST['email'];
// $password = $_POST['password'];
// $user_id = htmlspecialchars($_COOKIE["user_id"]);
// $random_hash = htmlspecialchars($_COOKIE["random_hash"]);
// if (isset($email) and isset($password)){
//   $user = new User(array("email"=>$email, "password"=>$password));
//   if($user->validate()){
//     $session = new Session(array("user_id"=>$user->id));
//     $session->save();
//     // header("Location:"."/index.php");
//   }
// }

// require $_SERVER['DOCUMENT_ROOT']."/views/layouts/layout.php";
