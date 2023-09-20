<?php

namespace coba2rizal\Console\Command;

use DI;

return [
    "console" => [
        "commands" => [
            ExampleCommand::class,
        ],
        "factories" => [
            ExampleCommand::class => DI\create()
        ]
    ]
];
