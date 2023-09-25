<?php

declare(strict_types=1);

namespace coba2rizal\Provider\Factory;

use Psr\Container\ContainerInterface;
use coba2rizal\Provider\RoomProvider;
use coba2rizal\Repository\RoomRepository;

class RoomProviderFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $roomRepository = $container->get(RoomRepository::class);
        return new RoomProvider($roomRepository);
    }
}
