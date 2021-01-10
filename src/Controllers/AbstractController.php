<?php
declare(strict_types=1);

namespace App\Controllers;

abstract class AbstractController
{
    public static function createView($viewFolder, $viewName)
    {
        require_once (__DIR__ . '/../Views/' . $viewFolder . '/' . $viewName . '.php');
    }
}