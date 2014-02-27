<?
require_once $_SERVER['DOCUMENT_ROOT']."/models/session.php";
Session::destroy_unactual();
require_once $_SERVER['DOCUMENT_ROOT']."/views/posts/index.php";
