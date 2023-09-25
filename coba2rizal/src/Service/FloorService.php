<?php

declare(strict_types=1);

namespace coba2rizal\Service;

use coba2rizal\Model\FloorModel;
use coba2rizal\Repository\FloorRepository;

class FloorService
{
    protected $floorRepository;

    public function __construct(FloorRepository $floorRepository)
    {
        $this->floorRepository = $floorRepository;
    }

    public function save(FloorModel $floor)
    {
        return $this->floorRepository->upsert($floor);
    }

    public function remove(FloorModel $floor): bool
    {
        $result = $this->floorRepository->delete(["id" => $floor->id]);
        if ($result->isError()) {
            return false;
        }
        return true;
    }
}
