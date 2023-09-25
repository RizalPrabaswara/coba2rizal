<?php

declare(strict_types=1);

namespace coba2rizal\Action\Factory;

use Psr\Container\ContainerInterface;
use coba2rizal\Action\FloorAction;
use coba2rizal\Provider\FloorProvider;
use coba2rizal\Service\FloorService;

class FloorActionFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $floorProvider = $container->get(FloorProvider::class);
        $floorService = $container->get(FloorService::class);
        return new FloorAction($floorProvider, $floorService);
    }
}
