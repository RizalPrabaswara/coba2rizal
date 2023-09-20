<?php

declare(strict_types=1);

namespace coba2rizal\Provider\Factory;

use Psr\Container\ContainerInterface;
use coba2rizal\Provider\SlotProvider;
use coba2rizal\Repository\SlotRepository;

class SlotProviderFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $slotRepository = $container->get(SlotRepository::class);
        return new SlotProvider($slotRepository);
    }
}
