<?php
declare(strict_types=1);

namespace App\Core;

use DI\ContainerBuilder;

class Route
{
    public static $validRoutes = [];

    public static function set($route, $fnc)
    {
        self::$validRoutes = $route;

        if ($_GET['url'] == $route) {
            $fnc->__invoke();
        }
    }
}