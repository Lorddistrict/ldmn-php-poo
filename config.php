<?php
declare(strict_types=1);

use App\Classes\Boy;
use App\Controllers\StudentsController;
use Faker\Factory;

$faker = Factory::create();

return [
    Boy::class => \DI\create()->constructor($faker->uuid, $faker->firstName, $faker->lastName),
    StudentsController::class => \DI\create()->constructor(\DI\get(Boy::class))
];