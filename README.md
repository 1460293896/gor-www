# gor-www
web interface

# postgres

```bash
$ sudo apt install postgresql postgresql-contrib
$ sudo -u postgres psql
$ CREATE ROLE gorbaniov WITH LOGIN ENCRYPTED PASSWORD '1';
$ CREATE DATABASE gor OWNER gorbaniov;
$ Quit psql with \q
```

## Web-interface
$ git clone https://github.com/ixbaseANT/gor-www
- Gor-www should now be unzip in `www/pool`.
- For gord monitoring run http://localhost/pool/v.php?ix=gor-pgDB-logs
- Admin pool web interface http://localhost/pool/v.php?ix=gor-adm
- User web interface http://localhost/pool
