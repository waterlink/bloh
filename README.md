bloh
====

## Install php

```bash
sudo apt-get install php5 php5-dev php5-pgsql
```

## Install postgres

```bash
sudo apt-get install postgresql
sudo {vim or subl, or anything else} /etc/postgresql/9.*/main/pg_hba.conf
{add after postgres -- peer string:

  local   all             postgres                                peer
+ local   all             bloh                                    md5

}
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
psql bloh -f post.sql -U bloh -W
{enter bloh password}
```

