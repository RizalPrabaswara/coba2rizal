<?php

declare(strict_types=1);

namespace coba2rizal\Service\Factory;

use Psr\Container\ContainerInterface;
use coba2rizal\Repository\BuildingRepository;
use coba2rizal\Service\BuildingService;

class BuildingServiceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $buildingRepository = $container->get(BuildingRepository::class);
        return new BuildingService($buildingRepository);
    }
}
