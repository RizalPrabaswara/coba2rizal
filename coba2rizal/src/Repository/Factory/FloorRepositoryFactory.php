<?php

declare(strict_types=1);

namespace coba2rizal\Repository\Factory;

use Psr\Container\ContainerInterface;
use coba2rizal\Database;
use coba2rizal\Repository\FloorRepository;

class FloorRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $db = $container->get(Database::class);
        return new FloorRepository($db, "floor");
    }
}
