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

        // PHP DI
        $containerBuilder = new ContainerBuilder();
        $containerBuilder->useAutowiring(false);
        $containerBuilder->addDefinitions('config.php');
        $container = $containerBuilder->build();

        if ($_GET['url'] == $route) {
            $fnc->__invoke($container);
        }
    }
}