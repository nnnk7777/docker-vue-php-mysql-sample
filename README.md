### ๐ณ Docker ๅๅผทไผ็จใตใณใใซ๏ผไปฎ๏ผ

#### TODO

- [ ] dev ใจ prod ใๅใใ
- [ ] client ๅดใฎๅฎ่ฃ
- [ ] ใงใใใใใฉใ่ชฌๆใใใใ่ใใใปใปใปใป

#### ๐ ๏ธ ไฝฟ็จ่จ่ชใปใใผใซใชใฉ

- Docker
- Vue.js + Nginx
- PHP + Apache
- MySQL
- phpMyAdmin

#### ๐ฒ ใใฃใฌใฏใใชๆงๆ

```
.
โโโ /api
โ   โโโ /src
โ   โโโ Dockerfile
โ   โโโ php.ini
โโโ /client
โ   โโโ /src
โ   โโโ ...
โ   โโโ Dockerfile
โ   โโโ default.conf
โ   โโโ nginx.conf
โโโ /db
โ   โโโ /data
โ   โโโ /init
โ   โ   โโโ 1_create_table.sql
โ   โโโ ...
โ   โโโ Dockerfile
โ   โโโ my.conf
โโโ .env
โโโ README.md
โโโ docker-compose.yml
```

**.env**

```
MYSQL_USER=dog
MYSQL_PASSWORD=***********
MYSQL_ROOT_PASSWORD=***********
MYSQL_DATABASE=test_db
PMA_ARBITRARY=1
PMA_HOST=mysql
PMA_USER=dog
PMA_PASSWORD=***********
```
