<?php

declare(strict_types=1);

namespace coba2rizal\Service\Factory;

use Psr\Container\ContainerInterface;
use coba2rizal\Repository\SlotRepository;
use coba2rizal\Service\SlotService;

class SlotServiceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $slotRepository = $container->get(SlotRepository::class);
        return new SlotService($slotRepository);
    }
}
