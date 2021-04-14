<?php

declare(strict_types=1);

use Simple\App\Action\Home;
use Yiisoft\Router\Route;

return [
    Route::get('/')->action([Home::class, 'run'])->name('home'),
];
