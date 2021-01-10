<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Classes\Boy;

class StudentsController extends AbstractController
{
    public static function index(Boy $boy)
    {
        return $boy;
    }

    public static function test() {
        echo 'Test';
    }
}