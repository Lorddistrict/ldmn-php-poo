<?php
declare(strict_types=1);

use App\Controllers\StudentsController;
use App\Core\Route;

Route::set('students/index', function() {
    StudentsController::createView('students', 'index');
});

Route::set('students/test', function() {
    StudentsController::createView('students', 'test');
});