<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Classes\Student;

class StudentsController
{
    private $student;

    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    public function index()
    {
        for ($i=0; $i<10; $i++) {
            echo 'Hello ' . $this->student->getFirstName() . ' ' . $this->student->getLastName() . '<br>';
        }
    }
}