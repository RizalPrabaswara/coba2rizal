<?php

declare(strict_types=1);

namespace coba2rizal\Provider\Factory;

use Psr\Container\ContainerInterface;
use coba2rizal\Provider\BuildingProvider;
use coba2rizal\Repository\BuildingRepository;

class BuildingProviderFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $buildingRepository = $container->get(BuildingRepository::class);
        return new BuildingProvider($buildingRepository);
    }
}
