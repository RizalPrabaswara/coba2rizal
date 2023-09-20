<?php

declare(strict_types=1);

namespace coba2rizal\Service\Factory;

use Psr\Container\ContainerInterface;
use coba2rizal\Repository\CityRepository;
use coba2rizal\Service\CityService;

class CityServiceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $cityRepository = $container->get(CityRepository::class);
        return new CityService($cityRepository);
    }
}
