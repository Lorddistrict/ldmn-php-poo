<?php
declare(strict_types=1);

use App\Controllers\DefaultController;
use App\Controllers\StudentsController;
use App\Core\Route;

// Index default route
Route::set('', function($container) {
    $container->call([DefaultController::class, 'index']);
});

// Student
Route::set('students/index', function($container) {
    $container->call([StudentsController::class, 'index']);
});

// School Class