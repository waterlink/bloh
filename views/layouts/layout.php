<!DOCTYPE html>
<?php
?>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <script src="/js/comment.js"></script>
    <?require_once $_SERVER['DOCUMENT_ROOT'].'/views/users/top_panel.php';?>
    <title><?= $title ?> - Bloh!</title>
  </head>
  <body>
  <div class="main-container">
    <h1><?= $title ?></h1>
      <?
        require_once $_SERVER['DOCUMENT_ROOT']."/".$view_name.".php";
      ?>
  </div>
  </body>
</html>
