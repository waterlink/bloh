<?php
function get_absolute_url($uri){
  $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ||
    $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
  if (!isset($uri)) {
    $uri = $_SERVER['REQUEST_URI'];
  }
  return $protocol.$_SERVER['HTTP_HOST'].$uri;
}

function redirect($uri) {
  header('Location:'.$uri);
  exit();
}
?>
