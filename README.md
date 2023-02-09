# laravel-remark

###  部署步骤

```
$ composer require hankin/laravel-remark

```

If you don't use auto-discovery, or using Laravel version < 5.5 Add service provider to your app.php file

`\Hankin\LaravelRemark\RemarkServiceProvider::class`

Publish configurations and migrations, then migrate comments table.


```
php artisan vendor:publish
php artisan migrate
```


Add canRemark trait to your User model.


```
use Hankin\LaravelRemark\CanRemark;

class User extends Model
{
    use CanRemark;
    
    // ...   
}
```


Add Commentable interface and HasRemarks trait to your commentable model(s).


```
use Hankin\LaravelRemark\Contracts\Remarkable;
use Hankin\LaravelRemark\HasRemarks;

class Product extends Model implements Remarkable
{
    use HasRemarks;
    
    // ...   
}
```

If you want to have your own Comment Model create a new one and extend my Comment model.


```
use Hankin\LaravelReward\Models\Remark LaravelRemark;

class Remark extends LaravelRemark
{
    // ...
}
```
