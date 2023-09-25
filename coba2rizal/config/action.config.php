<?php

declare(strict_types=1);

namespace coba2rizal\Action;

use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    "action" => [
        "factories" => [
            DashboardAction::class => InvokableFactory::class,
            UserAction::class => Factory\UserActionFactory::class,
            CityAction::class => Factory\CityActionFactory::class,
            SlotAction::class => Factory\SlotActionFactory::class,
            BuildingAction::class => Factory\BuildingActionFactory::class,
            ShelfAction::class => Factory\ShelfActionFactory::class,
            FloorAction::class => Factory\FloorActionFactory::class,
            RoomAction::class => Factory\RoomActionFactory::class,
        ],
    ]
];
