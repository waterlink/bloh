<?php

$dsn = "pgsql"
      .":host=localhost"
      .";dbname=bloh"
      .";user=bloh"
      .";port=5432"
      .";password=bloh";

$db = new PDO($dsn);
