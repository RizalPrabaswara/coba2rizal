<?php

namespace coba2rizal\View\Helper\Factory;

use Psr\Container\ContainerInterface;
use coba2rizal\View\Helper\NavigationHelper;
use Itseasy\Navigation\Navigation;

class NavigationHelperFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $navigation = $container->get(Navigation::class);
        return new NavigationHelper($navigation);
    }
}
