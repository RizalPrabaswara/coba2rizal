<?php

declare(strict_types=1);

namespace coba2rizal\Service;

use coba2rizal\Model\BuildingModel;
use coba2rizal\Repository\BuildingRepository;

class BuildingService
{
    protected $buildingRepository;

    public function __construct(BuildingRepository $buildingRepository)
    {
        $this->buildingRepository = $buildingRepository;
    }

    public function save(BuildingModel $building)
    {
        return $this->buildingRepository->upsert($building);
    }

    public function remove(BuildingModel $building): bool
    {
        $result = $this->buildingRepository->delete(["id" => $building->id]);
        if ($result->isError()) {
            return false;
        }
        return true;
    }
}
