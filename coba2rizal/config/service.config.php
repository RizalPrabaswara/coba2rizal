<?php

declare(strict_types=1);

namespace coba2rizal;

return [
    "service" => [
        "factories" => [
            Database::class => Database\Factory\DatabaseFactory::class,
            Provider\UserProvider::class => Provider\Factory\UserProviderFactory::class,
            Repository\UserRepository::class => Repository\Factory\UserRepositoryFactory::class,
            Service\UserService::class => Service\Factory\UserServiceFactory::class,

            Provider\CityProvider::class => Provider\Factory\CityProviderFactory::class,
            Repository\CityRepository::class => Repository\Factory\CityRepositoryFactory::class,
            Service\CityService::class => Service\Factory\CityServiceFactory::class,

            Provider\SlotProvider::class => Provider\Factory\SlotProviderFactory::class,
            Repository\SlotRepository::class => Repository\Factory\SlotRepositoryFactory::class,
            Service\SlotService::class => Service\Factory\SlotServiceFactory::class,
        ]
    ],
];
