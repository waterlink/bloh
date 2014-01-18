<?php?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="index.js"></script>
    <title><?= $title ?> - Bloh!</title>
  </head>
  <body>
    <?
      require_once $_SERVER['DOCUMENT_ROOT']."/".$view_name.".php";
    ?>
  </body>
</html>
