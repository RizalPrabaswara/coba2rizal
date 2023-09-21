<?php

declare(strict_types=1);

namespace coba2rizal\Provider;

use coba2rizal\Model\BuildingModel;
use coba2rizal\Model\CityModel;
use coba2rizal\Repository\BuildingRepository;
use coba2rizal\Repository\CityRepository;
use Itseasy\Model\CollectionModel;
use Traversable;

class BuildingProvider
{
    protected $buildingRepository;

    public function __construct(BuildingRepository $buildingRepository)
    {
        $this->buildingRepository = $buildingRepository;
    }

    public function listCity(): Traversable
    {
        $result = $this->buildingRepository->getRows();
        return $result->getRows(new CollectionModel(new BuildingModel()));
    }

    public function getUserById(int $id): BuildingModel
    {
        $result = $this->buildingRepository->getRowByIdentifier($id);
        return $result->getFirstRow(BuildingModel::class);
    }
}
