<?php

declare(strict_types=1);

namespace coba2rizal\Service\Factory;

use Psr\Container\ContainerInterface;
use coba2rizal\Repository\RoomRepository;
use coba2rizal\Service\RoomService;

class RoomServiceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $roomRepository = $container->get(RoomRepository::class);
        return new RoomService($roomRepository);
    }
}
