<?php

// set a constant that holds the project's folder path, like "/var/www/".
// DIRECTORY_SEPARATOR adds a slash to the end of the path
define('ROOT', __DIR__ . DIRECTORY_SEPARATOR);
// set a constant that holds the project's "application" folder, like "/var/www/application".
define('APP', ROOT . 'application' . DIRECTORY_SEPARATOR);

// This is the (totally optional) auto-loader for Composer-dependencies (to load tools into your project).
// If you have no idea what this means: Don't worry, you don't need it, simply leave it like it is.
if (file_exists(ROOT . 'vendor/autoload.php')) {
    require ROOT . 'vendor/autoload.php';
}

// load application config (error reporting etc.)
require_once APP . 'config/config.php';

// FOR DEVELOPMENT: this loads PDO-debug, a simple function that shows the SQL query (when using PDO).
// If you want to load pdoDebug via Composer, then have a look here: https://github.com/panique/pdo-debug


require_once APP . 'core/controller.php';
require_once APP . 'controllers/homepage.php';
require_once APP . 'controllers/insertDataController.php';
require_once APP . 'crawler/CrawlerInterface.php';
require_once APP . 'crawler/page.php';
require_once APP . 'crawler/pages/dantri.php';
require_once APP . 'crawler/pages/vnexpress.php';
require_once APP . 'crawler/pages/vietnamnet.php';
require_once APP . 'crawler/page.php';
require_once APP . 'model/model.php';
require_once APP . 'curl/curl.php';
// load application class
require_once APP . 'core/application.php';

use App\Core\Application;
// start the application
$app = new Application();
