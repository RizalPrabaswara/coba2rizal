<?php
declare(strict_types=1);

namespace coba2rizal\Service\Factory;

use Psr\Container\ContainerInterface;
use coba2rizal\Repository\UserRepository;
use coba2rizal\Service\UserService;

class UserServiceFactory {
    public function __invoke(ContainerInterface $container) {
        $userRepository = $container->get(UserRepository::class);
        return new UserService($userRepository);
    }
}
