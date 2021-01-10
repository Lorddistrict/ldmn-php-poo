<?php
declare(strict_types=1);

namespace App\Controllers;

use Twig\Environment;

class DefaultController
{
    /**
     * @param Environment $twig
     *
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public static function index(Environment $twig): void
    {
        echo $twig->render('index.html.twig');

        return;
    }
}
