<?php
declare(strict_types=1);

use App\Controllers\StudentsController;
use App\Core\Route;

Route::set('students/index', function($container) {
    $container->call([StudentsController::class, 'index']);
});

Route::set('students/test', function($container) {
    $container->call([StudentsController::class, 'test']);
});