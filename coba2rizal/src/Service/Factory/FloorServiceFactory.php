<?php

declare(strict_types=1);

namespace coba2rizal\Service\Factory;

use Psr\Container\ContainerInterface;
use coba2rizal\Repository\FloorRepository;
use coba2rizal\Service\FloorService;

class FloorServiceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $floorRepository = $container->get(FloorRepository::class);
        return new FloorService($floorRepository);
    }
}
