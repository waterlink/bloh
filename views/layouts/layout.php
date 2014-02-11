<?php?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <script src="/js/index.js"></script>

    <title><?= $title ?> - Bloh!</title>
  </head>
  <body>
  <div class="main-container">
    <h1><?= $title ?></h1>
    <div class="container">
      <?
        require_once $_SERVER['DOCUMENT_ROOT']."/".$view_name.".php";
      ?>
    </div>
  </div>
  </body>
</html>
