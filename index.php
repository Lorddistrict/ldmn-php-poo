<?php
declare(strict_types=1);

use App\Controllers\StudentsController;
use DI\ContainerBuilder;
use Faker\Factory;

require __DIR__ . '/init.php';

// Faker
$faker = Factory::create();

// PHP DI
$containerBuilder = new ContainerBuilder();
$containerBuilder->useAutowiring(false);
$containerBuilder->addDefinitions('config.php');
$container = $containerBuilder->build();

$container->call([StudentsController::class, 'index']);