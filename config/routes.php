<?php

declare(strict_types=1);

use Simple\App\Action\Index;
use Yiisoft\Router\Route;

return [
    Route::get('/')->action([Index::class, 'run'])->name('index'),
];
