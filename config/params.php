<?php

declare(strict_types=1);

use Simple\App\Command\HelloCommand;
use Simple\App\Handler\NotFoundHandler;
use Yiisoft\ErrorHandler\Middleware\ErrorCatcher;
use Yiisoft\Router\Middleware\Router;
use Yiisoft\Session\SessionMiddleware;

return [
    'yiisoft/aliases' => [
        'aliases' => [
            '@root' => dirname(__DIR__),
            '@assets' => '@root/public/assets',
            '@assetsUrl' => '/assets',
            '@npm' => '@root/node_modules',
            '@public' => '@root/public',
            '@resources' => '@root/resources',
            '@runtime' => '@root/runtime',
            '@translations' => '@root/storage/translations',
            '@vendor' => '@root/vendor',
        ],
    ],

    'yiisoft/yii/http' => [
        'middlewares' => [
            ErrorCatcher::class,
            SessionMiddleware::class,
            Router::class,
        ],
        'notFoundHandler' => NotFoundHandler::class,
    ],

    'yiisoft/yii-console' => [
        'commands' => [
            'hello' => HelloCommand::class,
        ],
    ],
];
