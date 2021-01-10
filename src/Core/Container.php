<?php
declare(strict_types=1);

namespace App\Core;

use DI\ContainerBuilder;

class Container
{
    private static $_instance = null;

    public static function buildContainer()
    {
        if (is_null(self::$_instance)) {
            $containerBuilder = new ContainerBuilder();
            $containerBuilder->useAutowiring(false);
            $containerBuilder->addDefinitions('config.php');
            self::$_instance = $containerBuilder->build();
        }

        return self::$_instance;
    }
}
