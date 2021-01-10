<?php
declare(strict_types=1);

use App\Classes\Boy;
use App\Controllers\StudentsController;
use DI\ContainerBuilder;

require __DIR__ . '/init.php';
require __DIR__ . '/routes.php';

// Faker
$faker = Faker\Factory::create();

// PHP DI
$containerBuilder = new ContainerBuilder();
$container = $containerBuilder->build();

$boy = new Boy($faker->uuid, $faker->firstName, $faker->lastName);
$container->set(Boy::class, $boy);
$container->call([StudentsController::class, 'index']);