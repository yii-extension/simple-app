<?php

declare(strict_types=1);

// Do not edit. Content will be replaced.
return [
    '/' => [
        'params' => [
            'yiisoft/aliases' => [
                'config/params.php',
            ],
            'yiisoft/csrf' => [
                'config/params.php',
            ],
            'yiisoft/data-response' => [
                'config/params.php',
            ],
            'yiisoft/router-fastroute' => [
                'config/params.php',
            ],
            'yiisoft/session' => [
                'config/params.php',
            ],
            'yiisoft/log-target-file' => [
                'config/params.php',
            ],
            'yiisoft/yii-console' => [
                'config/params.php',
            ],
            '/' => [
                'params.php',
            ],
        ],
        'common' => [
            'yiisoft/aliases' => [
                'config/common.php',
            ],
            'yiisoft/router-fastroute' => [
                'config/common.php',
            ],
            'yiisoft/log-target-file' => [
                'config/common.php',
            ],
            'yiisoft/router' => [
                'config/common.php',
            ],
            'yiisoft/yii-event' => [
                'config/common.php',
            ],
            '/' => [
                'common/*.php',
            ],
        ],
        'web' => [
            'yiisoft/csrf' => [
                'config/web.php',
            ],
            'yiisoft/data-response' => [
                'config/web.php',
            ],
            'yiisoft/router-fastroute' => [
                'config/web.php',
            ],
            'yiisoft/session' => [
                'config/web.php',
            ],
            'yiisoft/error-handler' => [
                'config/web.php',
            ],
            'yiisoft/middleware-dispatcher' => [
                'config/web.php',
            ],
            'yiisoft/yii-event' => [
                'config/web.php',
            ],
            '/' => [
                '$common',
                'web/*.php',
            ],
        ],
        'events-console' => [
            'yiisoft/log' => [
                'config/events-console.php',
            ],
            'yiisoft/yii-console' => [
                'config/events-console.php',
            ],
            'yiisoft/yii-event' => [
                '$events',
                'config/events-console.php',
            ],
        ],
        'events-web' => [
            'yiisoft/log' => [
                'config/events-web.php',
            ],
            'yiisoft/yii-event' => [
                '$events',
                'config/events-web.php',
            ],
        ],
        'console' => [
            'yiisoft/yii-console' => [
                'config/console.php',
            ],
            'yiisoft/yii-event' => [
                'config/console.php',
            ],
            '/' => [
                '$common',
                'console/*.php',
            ],
        ],
        'providers-console' => [
            'yiisoft/yii-console' => [
                'config/providers-console.php',
            ],
            '/' => [
                '$providers',
                'providers-console.php',
            ],
        ],
        'events' => [
            'yiisoft/yii-event' => [
                'config/events.php',
            ],
        ],
        'event' => [
            '/' => [
                'events.php',
            ],
        ],
        'event-web' => [
            '/' => [
                '$events',
                'events-web.php',
            ],
        ],
        'event-console' => [
            '/' => [
                '$events',
                'events-console.php',
            ],
        ],
        'providers' => [
            '/' => [
                'providers.php',
            ],
        ],
        'providers-web' => [
            '/' => [
                '$providers',
                'providers-web.php',
            ],
        ],
        'delegates' => [
            '/' => [
                'delegates.php',
            ],
        ],
        'delegates-web' => [
            '/' => [
                '$delegates',
                'delegates-web.php',
            ],
        ],
        'delegates-console' => [
            '/' => [
                '$delegates',
                'delegates-console.php',
            ],
        ],
        'bootstrap' => [
            '/' => [
                'bootstrap.php',
            ],
        ],
        'bootstrap-web' => [
            '/' => [
                '$bootstrap',
                'bootstrap-web.php',
            ],
        ],
        'bootstrap-console' => [
            '/' => [
                '$bootstrap',
                'bootstrap-console.php',
            ],
        ],
        'routes' => [
            '/' => [
                'routes.php',
            ],
        ],
    ],
];
