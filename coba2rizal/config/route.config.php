<?php

declare(strict_types=1);

namespace coba2rizal\Action;

return [
    "routes" => [
        [
            "route" => "/",
            "options" => [
                "action" => DashboardAction::class
            ]
        ],
        [
            "route" => "/user",
            "options" => [
                "redirect" => "/user/list",
            ],
            "child_routes" => [
                [
                    "route" => "/{id:[0-9]+}",
                    "method" => ["GET", "POST"],
                    "options" => [
                        "action" => UserAction::class
                    ]
                ],
                [
                    "route" => "/list",
                    "options" => [
                        "action" => UserAction::class
                    ]
                ]
            ]
        ],
        [
            "route" => "/city",
            "options" => [
                "redirect" => "/city/list",
            ],
            "child_routes" => [
                [
                    "route" => "/{id:[0-9]+}",
                    "method" => ["GET", "POST"],
                    "options" => [
                        "action" => CityAction::class
                    ]
                ],
                [
                    "route" => "/list",
                    "options" => [
                        "action" => CityAction::class
                    ]
                ]
            ]
        ],
        [
            "route" => "/slot",
            "options" => [
                "redirect" => "/slot/list",
            ],
            "child_routes" => [
                [
                    "route" => "/{id:[0-9]+}",
                    "method" => ["GET", "POST"],
                    "options" => [
                        "action" => SlotAction::class
                    ]
                ],
                [
                    "route" => "/list",
                    "options" => [
                        "action" => SlotAction::class
                    ]
                ],
                [
                    "route" => "/liststatus",
                    "options" => [
                        "action" => SlotAction::class
                    ]
                ]
            ]
        ],
    ],
];
