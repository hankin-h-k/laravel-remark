# laravel-remark

##### 部署步骤
1. composer require hankin-h-k/laravel-remark

If you don't use auto-discovery, or using Laravel version < 5.5 Add service provider to your app.php file

2.\Hankin\LaravelReward\RemarkServiceProvider::class

Publish configurations and migrations, then migrate comments table.

php artisan vendor:publish
php artisan migrate
