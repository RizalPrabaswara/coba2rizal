<?php

declare(strict_types=1);

namespace coba2rizal\Repository\Factory;

use Psr\Container\ContainerInterface;
use coba2rizal\Database;
use coba2rizal\Repository\SlotRepository;

class SlotRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $db = $container->get(Database::class);
        return new SlotRepository($db, "slot");
    }
}
