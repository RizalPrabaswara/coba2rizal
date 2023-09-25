<?php

declare(strict_types=1);

namespace coba2rizal\Provider\Factory;

use Psr\Container\ContainerInterface;
use coba2rizal\Provider\FloorProvider;
use coba2rizal\Repository\FloorRepository;

class FloorProviderFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $floorRepository = $container->get(FloorRepository::class);
        return new FloorProvider($floorRepository);
    }
}
