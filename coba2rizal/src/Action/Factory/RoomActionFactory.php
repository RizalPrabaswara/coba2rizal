<?php

declare(strict_types=1);

namespace coba2rizal\Action\Factory;

use Psr\Container\ContainerInterface;
use coba2rizal\Action\RoomAction;
use coba2rizal\Provider\RoomProvider;
use coba2rizal\Service\RoomService;

class RoomActionFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $roomProvider = $container->get(RoomProvider::class);
        $roomService = $container->get(RoomService::class);
        return new RoomAction($roomProvider, $roomService);
    }
}
