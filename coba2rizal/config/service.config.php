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

            Provider\BuildingProvider::class => Provider\Factory\BuildingProviderFactory::class,
            Repository\BuildingRepository::class => Repository\Factory\BuildingRepositoryFactory::class,
            Service\BuildingService::class => Service\Factory\BuildingServiceFactory::class,

            Provider\ShelfProvider::class => Provider\Factory\ShelfProviderFactory::class,
            Repository\ShelfRepository::class => Repository\Factory\ShelfRepositoryFactory::class,
            Service\ShelfService::class => Service\Factory\ShelfServiceFactory::class,

            Provider\FloorProvider::class => Provider\Factory\FloorProviderFactory::class,
            Repository\FloorRepository::class => Repository\Factory\FloorRepositoryFactory::class,
            Service\FloorService::class => Service\Factory\FloorServiceFactory::class,

            Provider\RoomProvider::class => Provider\Factory\RoomProviderFactory::class,
            Repository\RoomRepository::class => Repository\Factory\RoomRepositoryFactory::class,
            Service\RoomService::class => Service\Factory\RoomServiceFactory::class,
        ]
    ],
];
