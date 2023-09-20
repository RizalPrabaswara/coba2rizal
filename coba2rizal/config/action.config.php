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
        ],
    ]
];
