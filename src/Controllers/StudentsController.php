<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Classes\Exam;
use App\Classes\Mark;
use App\Classes\SchoolClass;
use App\Classes\Student;
use Faker\Factory;
use Twig\Environment;

class StudentsController
{
    /**
     * @param Environment $twig
     *
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public static function index(Environment $twig, Factory $factory): void
    {
        // Faker
        $faker = $factory::create('fr_FR');

        $schoolClasses = [];

        // SchoolClasses
        for ($i = 0; $i < 3; $i++) {

            // Generate one SchoolClass
            $schoolClass = new SchoolClass($faker->uuid);

            // Students
            for ($y = 0; $y < 5; $y++) {
                $schoolClass->joinSchoolClass(new Student($faker->uuid, $faker->firstName, $faker->lastName));
            }

            /** @var SchoolClass[] $schoolClasses */
            $schoolClasses[] = $schoolClass;
        }

        $mathsExam = new Exam($faker->uuid, 'Maths');

        /** @var SchoolClass $schoolClass */
        foreach ($schoolClasses as $schoolClass) {
            /** @var Student $student */
            foreach ($schoolClass->getStudents() as $student) {
                $mathsExam->addMarkToExam(new Mark($faker->uuid, $faker->numberBetween(0, 20), $student));
            }
        }

        echo $twig->render('students/index.html.twig', [
            'mathsExam' => $mathsExam,
        ]);
    }
}
