## About this project

Simple laravel application to setup and run Laravel unit tests

### Install

```
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate:fresh --seed
npm install
npm run build
```

Vite can break if nodejs version is behind 16.18

To run the tests, use the following command

`php artisan test`


Or to run each test class individually, use:

`./vendor/bin/phpunit tests/Unit/RoomTest.php`