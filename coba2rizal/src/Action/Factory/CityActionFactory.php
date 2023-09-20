<?php

declare(strict_types=1);

namespace coba2rizal\Action\Factory;

use Psr\Container\ContainerInterface;
use coba2rizal\Action\CityAction;
use coba2rizal\Provider\CityProvider;
use coba2rizal\Service\CityService;

class CityActionFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $cityProvider = $container->get(CityProvider::class);
        $cityService = $container->get(CityService::class);
        return new CityAction($cityProvider, $cityService);
    }
}
