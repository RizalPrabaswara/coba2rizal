<?php

declare(strict_types=1);

namespace coba2rizal\Action\Factory;

use Psr\Container\ContainerInterface;
use coba2rizal\Action\BuildingAction;
use coba2rizal\Provider\BuildingDetailProvider;
use coba2rizal\Provider\BuildingProvider;
use coba2rizal\Service\BuildingService;

class BuildingActionFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $buildingProvider = $container->get(BuildingProvider::class);
        $buildingService = $container->get(BuildingService::class);

        $buildingDetailProvider = $container->get(BuildingDetailProvider::class);
        return new BuildingAction($buildingProvider, $buildingService, $buildingDetailProvider);
    }
}
