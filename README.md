# gor-www
web interface

# apache2

```bash
$ sudo apt update
$ sudo apt upgrade
$ sudo systemctl status apache2
$ sudo apt install curl
$ sudo apt install apache2
```

# php

```bash
$ sudo apt -y install php php-common
$ sudo apt -y install libapache2-mod-php
```

# postgres

```bash
$ sudo apt install postgresql postgresql-contrib
$ sudo -u postgres psql
$ CREATE ROLE gorbaniov WITH LOGIN ENCRYPTED PASSWORD '1';
$ CREATE DATABASE gor OWNER gorbaniov;
$ Quit psql with \q
```
# sqlite3

```bash
$ sudo apt install sqlite3
$ sqlite3 --version
```
 
# Web-interface
$ git clone https://github.com/ixbaseANT/gor-www
- Gor-www should now be unzip in `www/pool`.
- For gord monitoring run http://localhost/pool/v.php?ix=gor-pgDB-logs
- Admin pool web interface http://localhost/pool/v.php?ix=gor-adm
- User web interface http://localhost/pool

# adm.config

```bash
hostnsme
login
password
```
