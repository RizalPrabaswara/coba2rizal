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
                    "route" => "/list{segment:[a-z]+}",
                    "options" => [
                        "action" => SlotAction::class,
                        // "arguments" => [
                        //     "STATUS" => "STATUSFULL",
                        //     "STATUS" => "STATUSAVALAIBLE",
                        // ],
                    ],
                ],
                [
                    "route" => "/list",
                    "options" => [
                        "action" => SlotAction::class
                    ]
                ]
            ]
        ],
        [
            "route" => "/building",
            "options" => [
                "redirect" => "/building/list",
            ],
            "child_routes" => [
                [
                    "route" => "/{id:[0-9]+}",
                    "method" => ["GET", "POST"],
                    "options" => [
                        "action" => BuildingAction::class
                    ]
                ],
                [
                    "route" => "/list",
                    "options" => [
                        "action" => BuildingAction::class
                    ]
                ]
            ]
        ],
        [
            "route" => "/floor",
            "options" => [
                "redirect" => "/floor/list",
            ],
            "child_routes" => [
                [
                    "route" => "/{id:[0-9]+}",
                    "method" => ["GET", "POST"],
                    "options" => [
                        "action" => FloorAction::class
                    ]
                ],
                [
                    "route" => "/list",
                    "options" => [
                        "action" => FloorAction::class
                    ]
                ]
            ]
        ],
        [
            "route" => "/room",
            "options" => [
                "redirect" => "/room/list",
            ],
            "child_routes" => [
                [
                    "route" => "/{id:[0-9]+}",
                    "method" => ["GET", "POST"],
                    "options" => [
                        "action" => RoomAction::class
                    ]
                ],
                [
                    "route" => "/list",
                    "options" => [
                        "action" => RoomAction::class
                    ]
                ]
            ]
        ],
        [
            "route" => "/shelf",
            "options" => [
                "redirect" => "/shelf/list",
            ],
            "child_routes" => [
                [
                    "route" => "/{id:[0-9]+}",
                    "method" => ["GET", "POST"],
                    "options" => [
                        "action" => ShelfAction::class
                    ]
                ],
                [
                    "route" => "/list",
                    "options" => [
                        "action" => ShelfAction::class
                    ]
                ]
            ]
        ],
    ],
];
