<?php

declare(strict_types=1);

namespace coba2rizal\Provider\Factory;

use Psr\Container\ContainerInterface;
use coba2rizal\Provider\CityProvider;
use coba2rizal\Repository\CityRepository;

class CityProviderFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $cityRepository = $container->get(CityRepository::class);
        return new CityProvider($cityRepository);
    }
}
