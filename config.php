<?php
declare(strict_types=1);

use App\Controllers\StudentsController;
use Faker\Factory;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

return [
    Environment::class => \DI\create()->constructor(new FilesystemLoader(__DIR__ . '/src/Views')),
    Factory::class => \DI\create()->constructor(),
    StudentsController::class => \DI\create()->constructor(
        \DI\get(Environment::class),
        \DI\get(Factory::class)
    ),
];