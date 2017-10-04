# lumen-maintaince
Provides support for maintaince mode for Lumen Framework.

# Installation

1. ```composer require mingalevme/lumen-maintaince```.
2. Register the service provider ```Mingalevme\Lumen\Maintaince\MaintainceServiceProvider```.
3. Replace **Lumen Application** class with one of the following:
3.1. You can directly use class ```Mingalevme\Lumen\Maintaince\Application```  in you ```/bootstrap/app.php``` instead of ```Laravel\Lumen\Application```:
```php
<?php // /bootsrap/app.php

// ...

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| Here we will load the environment and create the application instance
| that serves as the central piece of this framework. We'll use this
| application as an "IoC" container and router for this framework.
|
*/

$app = new Mingalevme\Lumen\Maintaince\Application(
    realpath(__DIR__.'/../')
);

// ...

```
3.2. **OR** you can use the trait ```Mingalevme\Lumen\Maintaince\Maintaince``` for your own **Application** class:
```php
<?php // /app/Helpers/Laravel/Lumen/Application.php

namespace App\Helpers\Laravel\Lumen;

use Mingalevme\Lumen\Maintaince\Maintaince;

class Application extends \Laravel\Lumen\Application
{
    use Maintaince;
}

```

```php
<?php // /bootsrap/app.php

// ...

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| Here we will load the environment and create the application instance
| that serves as the central piece of this framework. We'll use this
| application as an "IoC" container and router for this framework.
|
*/

$app = new App\Helpers\Laravel\Lumen\Application(
    realpath(__DIR__.'/../')
);

// ...

```
4. Now you are able to use ```artisan down``` and  ```artisan up``` commands:
```bash
$ php artisan list
# ...
Available commands:
    # ...
    down                Put the application into maintenance mode
    up                  Bring the application out of maintenance mode
    # ...
# ...
```

```bash
$ php artisan down
Application is now in maintenance mode.
```

```bash
$ php artisan up
Application is now live.
```