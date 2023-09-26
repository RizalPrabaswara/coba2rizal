<?php

declare(strict_types=1);

namespace coba2rizal\Provider\Factory;

use coba2rizal\Provider\BuildingDetailProvider;
use Psr\Container\ContainerInterface;
use coba2rizal\Provider\BuildingProvider;
use coba2rizal\Repository\BuildingRepository;
use coba2rizal\Repository\CityRepository;

class BuildingDetailProviderFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $buildingRepository = $container->get(BuildingRepository::class);
        $cityRepository = $container->get(CityRepository::class);
        return new BuildingDetailProvider($buildingRepository, $cityRepository);
    }
}
