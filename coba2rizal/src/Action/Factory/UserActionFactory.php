<?php

declare(strict_types=1);

namespace coba2rizal\Action\Factory;

use Psr\Container\ContainerInterface;
use coba2rizal\Action\UserAction;
use coba2rizal\Provider\UserProvider;
use coba2rizal\Service\UserService;

class UserActionFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $userProvider = $container->get(UserProvider::class);
        $userService = $container->get(UserService::class);
        return new UserAction($userProvider, $userService);
    }
}
