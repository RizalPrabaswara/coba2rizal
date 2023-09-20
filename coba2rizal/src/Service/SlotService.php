<?php

declare(strict_types=1);

namespace coba2rizal\Service;

use coba2rizal\Model\SlotModel;
use coba2rizal\Repository\SlotRepository;

class SlotService
{
    protected $slotRepository;

    public function __construct(SlotRepository $slotRepository)
    {
        $this->slotRepository = $slotRepository;
    }

    public function save(SlotModel $slot)
    {
        return $this->slotRepository->upsert($slot);
    }

    public function remove(SlotModel $slot): bool
    {
        $result = $this->slotRepository->delete(["id" => $slot->id]);
        if ($result->isError()) {
            return false;
        }
        return true;
    }
}
