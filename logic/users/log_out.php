<?php
require_once $_SERVER['DOCUMENT_ROOT']."/models/session.php";
$session_id = $_POST['session_id'];
$session = Session::find($session_id);
$session->destroy();
header("Location:"."/index.php");
// $session->destroy();
// $user = null;
// header("Location:"."/index.php");
