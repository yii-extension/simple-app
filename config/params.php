<?php

declare(strict_types=1);

use Simple\App\Command\Hello;

return [
    'yiisoft/aliases' => [
        'aliases' => [
            '@root' => dirname(__DIR__),
            '@assets' => '@root/public/assets',
            '@assetsUrl' => '/assets',
            '@layout' => '@resources/layout',
            '@npm' => '@root/node_modules',
            '@public' => '@root/public',
            '@resources' => '@root/resources',
            '@runtime' => '@root/runtime',
            '@views' => '@resources/views',
        ],
    ],

    'yiisoft/yii-console' => [
        'commands' => [
            'hello' => Hello::class,
        ],
    ],
];
