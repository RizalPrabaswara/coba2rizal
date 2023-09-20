<?php

declare(strict_types=1);

namespace coba2rizal\Provider\Factory;

use Psr\Container\ContainerInterface;
use coba2rizal\Provider\ShelfProvider;
use coba2rizal\Repository\ShelfRepository;

class ShelfProviderFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $shelfRepository = $container->get(ShelfRepository::class);
        return new ShelfProvider($shelfRepository);
    }
}
