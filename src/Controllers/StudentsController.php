<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Classes\Boy;

class StudentsController
{
    public function index(Boy $boy)
    {
        echo 'Hello ' . $boy->getFirstName() . ' ' . $boy->getLastName() . '<br>';
    }

    public function test() {
        echo 'Test';
    }
}