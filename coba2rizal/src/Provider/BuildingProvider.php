<?php

declare(strict_types=1);

namespace coba2rizal\Provider;

use coba2rizal\Model\BuildingModel;
use coba2rizal\Model\CityModel;
use coba2rizal\Repository\BuildingRepository;
use coba2rizal\Repository\CityRepository;
use Itseasy\Model\CollectionModel;
use Traversable;
use Laminas\Db\Sql\Select;
use Laminas\Db\TableGateway\TableGateway;
use Psr\Container\ContainerInterface;
use coba2rizal\Database;

class BuildingProvider
{
    protected $buildingRepository;
    // protected $cityRepository;
    // protected $table = 'city';

    public function __construct(BuildingRepository $buildingRepository)
    {
        $this->buildingRepository = $buildingRepository;
    }

    public function listBuilding(): Traversable
    {
        $result = $this->buildingRepository->getRows();
        return $result->getRows(new CollectionModel(new BuildingModel()));
    }

    // public function getCityById(int $id): CityModel
    // {
    //     $result = $this->cityProvider->getUserById(intval($id));
    //     return $result->getFirstRow(CityModel::class);
    // }

    public function getBuildingById(int $id): BuildingModel
    {
        $result = $this->buildingRepository->getRowByIdentifier($id);
        return $result->getFirstRow(BuildingModel::class);
    }
}
