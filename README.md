bloh
====

## Install php

```bash
sudo apt-get install php5 php5-dev php5-pgsql
```

## Install postgres

```bash
sudo apt-get install postgresql
sudo su postgres
{postgres}: ./createdb.sh
{entering here bloh-bloh}
```

## Running connection test

```bash
php connect.php
```

## Creating post table

```bash
psql bloh -f post.sql -u bloh -W
{enter bloh password}
```

