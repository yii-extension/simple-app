<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Simple\App\Runner\WebApplicationRunner;

// PHP built-in server routing.
if (PHP_SAPI === 'cli-server') {
    // Serve static files as is.
    if (is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
        return false;
    }

    // Explicitly set for URLs with dot.
    $_SERVER['SCRIPT_NAME'] = '/index.php';
}

/**
 *  In the above points to where configs will be copied to. The path is relative to where is. The option is read for
 *  the root package, which is typically an application. Default is "/config".
 */
define('YII_CONFIG_DIRECTORY', getenv('YII_CONFIG_DIRECTORY') ?: dirname(__DIR__));

/**
 *  Set debug value for web application runner, for default its `true` add additionally the validation of the
 *  container-di configurations (debug mode).
 */
define('YII_DEBUG', getenv('YII_DEBUG') ?: true);

/**
 *  Set environment value for web application runner, for default its `null`.
 *
 *  @link https://github.com/yiisoft/config#environments
 */
define('YII_ENV', getenv('YII_ENV') ?: null);

// Run web application runner
$runner = new WebApplicationRunner(YII_CONFIG_DIRECTORY, YII_DEBUG, YII_ENV);
$runner->run();
