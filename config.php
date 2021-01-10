<?php
declare(strict_types=1);

use App\Controllers\StudentsController;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

return [
    Environment::class => \DI\create()->constructor(new FilesystemLoader(__DIR__ . '/src/Views')),
    StudentsController::class => \DI\create()->constructor(\DI\get(Environment::class))
];