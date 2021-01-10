<?php
declare(strict_types=1);

use App\Classes\Boy;
use App\Classes\Student;
use App\Controllers\StudentsController;
use DI\ContainerBuilder;
use Faker\Factory;

require __DIR__ . '/init.php';

// Faker
$faker = Factory::create();

// PHP DI
$containerBuilder = new ContainerBuilder();
$container = $containerBuilder->build();

$student = new Boy($faker->uuid, $faker->firstName, $faker->lastName);
$container->set(Student::class, $student);

$container->get(StudentsController::class)->index();