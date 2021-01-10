<?php
declare(strict_types=1);

namespace App\Controllers;

use Twig\Environment;

class StudentsController
{
    public static function index(Environment $twig)
    {
        echo $twig->render('students/index.html.twig', [
            'name' => 'Etienne'
        ]);
    }

    public static function test(Environment $twig) {
        echo $twig->render('students/test.html.twig', [
            'name' => 'Arthur'
        ]);
    }
}