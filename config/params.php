<?php

declare(strict_types=1);

use Simple\App\Command\HelloCommand;

return [
    'yiisoft/aliases' => [
        'aliases' => [
            '@root' => dirname(__DIR__),
            '@assets' => '@root/public/assets',
            '@assetsUrl' => '/assets',
            '@npm' => '@root/node_modules',
            '@public' => '@root/public',
            '@storage' => '@root/storage',
            '@runtime' => '@root/runtime',
            '@vendor' => '@root/vendor',
        ],
    ],

    'yiisoft/yii-console' => [
        'commands' => [
            'hello' => HelloCommand::class,
        ],
    ],
];
