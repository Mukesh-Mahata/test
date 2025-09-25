
<?php
putenv("APP_NAME=MyLaravelApp");
putenv("APP_ENV=production");
putenv("APP_KEY=base64:your_app_key_herebase64:DghuO1PYBrQqSyY9zJh6IxDDUxlyWFscECJ6jp8skdw=");
putenv("APP_DEBUG=false");
putenv("APP_URL=https://yourdomain.com");

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
