<?php
declare(strict_types=1);

namespace coba2rizal\Provider\Factory;

use Psr\Container\ContainerInterface;
use coba2rizal\Provider\UserProvider;
use coba2rizal\Repository\UserRepository;

class UserProviderFactory {
    public function __invoke(ContainerInterface $container) {
        $userRepository = $container->get(UserRepository::class);
        return new UserProvider($userRepository);
    }
}
