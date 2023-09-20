<?php

declare(strict_types=1);

namespace coba2rizal\Action\Factory;

use Psr\Container\ContainerInterface;
use coba2rizal\Action\SlotAction;
use coba2rizal\Provider\SlotProvider;
use coba2rizal\Service\SlotService;

class SlotActionFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $slotProvider = $container->get(SlotProvider::class);
        $slotService = $container->get(SlotService::class);
        return new SlotAction($slotProvider, $slotService);
    }
}
