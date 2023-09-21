<?php

declare(strict_types=1);

namespace coba2rizal\Repository\Factory;

use Psr\Container\ContainerInterface;
use coba2rizal\Database;
use coba2rizal\Repository\BuildingRepository;
use coba2rizal\Repository\CityRepository;

class BuildingRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $db = $container->get(Database::class);
        return new BuildingRepository($db, "Building");

        $db = $container->get(Database::class);
        return new CityRepository($db, "City");
    }
}
