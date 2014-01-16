<?php
function get_absolute_url($uri){
var_dump($uri);
  $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ||
    $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
  return $protocol.$_SERVER['HTTP_HOST'].$uri;
}
?>
