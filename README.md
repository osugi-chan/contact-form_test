# お問い合わせフォーム

## 環境構築

【Dockerビルド】
1.contact-form_testディレクトリ作成
2.Docker-compose.ymlファイル作成
3.default.confファイル作成
4.Dockerfile設定
5.php.iniファイル設定
6.docker-compose up -d --build

【Laravel環境構築】
1.docker-compose exec php bash
2.composer -v
3.composer-create-project "laravel/laravel=8.*" . --prefer-dist
4.env.exampleファイルから.envファイルを作成
5.php artisan key:generate
6.php artisan make:migration create_user_table
7.php artisan make:migration create_categories_table
8.php artisan make:migration create_contacts_table
9.php artisan migrate
10.php artisan make:model user
11.php artisan make:model category
12.php artisan make:model contact
13.php artisan make:seeder CategoriesTablesSeeder
14.php artisan make:seeder ContactSeeder
15.php artisan db:seed
16.php artisan make:controller ContactController
17.php artisan make:controller UserController
18.php artisan make:controller LoginController
19.php artisan make:controller AdminController
20.php artisan make:request ContactRequest
21.php artisan make:request AdminRequest
22.php artisan make:request LoginRequest
23.php artisan make:factory ContactFactory
24.php artisan make:factory UserFactory

## 使用技術

・PHP 7.4.9
・Laravel Framework 8.83.29
・Mysql 10.3.39-MariaDB

## ER図

![ER図](./public/images/contact-form_test.drawio.png)

## URL

・開発環境：http://localhost/
・phpMyAdmin:http://localhost:8080/
