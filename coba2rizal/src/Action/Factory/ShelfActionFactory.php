<?php

declare(strict_types=1);

namespace coba2rizal\Action\Factory;

use Psr\Container\ContainerInterface;
use coba2rizal\Action\ShelfAction;
use coba2rizal\Provider\ShelfProvider;
use coba2rizal\Service\ShelfService;

class ShelfActionFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $shelfProvider = $container->get(ShelfProvider::class);
        $shelfService = $container->get(ShelfService::class);
        return new ShelfAction($shelfProvider, $shelfService);
    }
}
