# bloh - Ultimate Blog Application on Pure PHP

## Install php 5.{4,5} on Ubuntu 13.04+

```bash
sudo apt-get install php5 php5-dev php5-pgsql
```

## Running php server in development

```bash
cd projects/bloh
php -S localhost:3000
```

Now it is available on http://localhost:3000

## Install postgres

```bash
sudo apt-get install postgresql
sudo {vim or subl, or anything else} /etc/postgresql/9.*/main/pg_hba.conf
{add after postgres -- peer string:

  local   all             postgres                                peer
+ local   all             bloh                                    md5

}
sudo service postgresql restart
sudo su postgres
{postgres}: ./createdb.sh
{entering here bloh-bloh}
```

## Running connection test

```bash
php connect.php
```

It shouldn't output any errors

## Creating post table

```bash
cd scripts
psql bloh -f create_tables.sql -U bloh -W
{enter bloh password}
```

