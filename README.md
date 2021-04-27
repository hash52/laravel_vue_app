# DockerでLaravel + Vue環境を構築
[参照したQiita記事](https://qiita.com/shimotaroo/items/29f7878b01ee4b99b951)

## 以下実行手順
リポジトリをclone
```
git clone https://github.com/hash52/laravel_vue_app.git
```

イメージを構築
```
docker-compose build
```

コンテナの起動
```
docker up -d
```

インスペクション
```
docker-compose exec app bash
```

composer install
```
cd laravel-vue-app
composer install
```

laravel-vue-app/.envの下記の項目についてdocker-compose.ymlの設定値を記述
```
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=db（←コンテナ名）
DB_PORT=3306（←コンテナ側のポート番号）
DB_DATABASE=db_name
DB_USERNAME=db_user
DB_PASSWORD=db_password
```

[http:localhost:8000](http:localhost:8000)にアクセスして、Laravelのデフォルトのトップページが表示されればok