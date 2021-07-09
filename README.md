### 🐳 Docker 勉強会用サンプル（仮）

#### TODO
- [ ] devとprodを分ける
- [ ] client側の実装
- [ ] で、これをどう説明するかを考える・・・・

#### 🛠️ 使用言語・ツールなど

- Docker
- Vue.js + Nginx
- PHP + Apache
- MySQL
- phpMyAdmin

#### 🌲 ディレクトリ構成

```
.
├── /api
│   ├── /src
│   ├── Dockerfile
│   └── php.ini
├── /client
│   ├── /src
│   ├── ...
│   ├── Dockerfile
│   ├── default.conf
│   └── nginx.conf
├── /db
│   ├── /data
│   ├── /init
│   │   └── 1_create_table.sql
│   ├── ...
│   ├── Dockerfile
│   └── my.conf
├── .env
├── README.md
└── docker-compose.yml
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
