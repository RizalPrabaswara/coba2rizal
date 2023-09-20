<?php

declare(strict_types=1);

namespace coba2rizal\Service\Factory;

use Psr\Container\ContainerInterface;
use coba2rizal\Repository\ShelfRepository;
use coba2rizal\Service\ShelfService;

class ShelfServiceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $shelfRepository = $container->get(ShelfRepository::class);
        return new ShelfService($shelfRepository);
    }
}
