<?php

# http://user:password@domain.com:port/url
# dbprotocol://user:password@domain.com:port/database
# postgres://vpmiludujrcuze:XA3FqJ9DNfRndvKN_oz5ZyT38m@ec2-184-73-194-196.compute-1.amazonaws.com:5432/dc779gq90r6k2h
$postgres_url = getenv('HEROKU_POSTGRESQL_GREEN_URL');

if (!$postgres_url) {
  $dsn = "pgsql"
        .":host=localhost"
        .";dbname=bloh"
        .";user=bloh"
        .";port=5432"
        .";password=bloh";
} else {
  preg_match_all('/^postgres:\/\/(?<user>[^:]*):(?<password>[^@]*)@(?<host>[^:]*):(?<port>[^\/]*)\/(?<database>[^$]*)$/', $postgres_url, $dbc);
  $dsn = "pgsql"
       . ":host=".$dbc['host'][0]
       . ";dbname=".$dbc['database'][0]
       . ";user=".$dbc['user'][0]
       . ";port=".$dbc['port'][0]
       . ";sslmode=require"
       . ";password=".$dbc['password'][0];
}

$db = new PDO($dsn);
