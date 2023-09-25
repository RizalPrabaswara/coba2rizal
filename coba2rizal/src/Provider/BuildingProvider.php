<?php

declare(strict_types=1);

namespace coba2rizal\Provider;

use coba2rizal\Model\BuildingModel;
use coba2rizal\Model\CityModel;
use coba2rizal\Repository\BuildingRepository;
use Itseasy\Model\CollectionModel;
use Traversable;
use Laminas\Db\Sql\Select;
use Laminas\Db\TableGateway\TableGateway;

class BuildingProvider
{
    protected $buildingRepository;
    //protected $table = 'Building';

    public function __construct(BuildingRepository $buildingRepository)
    {
        $this->buildingRepository = $buildingRepository;
    }

    public function listBuilding(): Traversable
    {
        $result = $this->buildingRepository->getRows();
        //$result->join(new CollectionModel(new CityModel()));
        return $result->getRows(new CollectionModel(new BuildingModel()));
    }

    public function getBuildingById(int $id): BuildingModel
    {
        $result = $this->buildingRepository->getRowByIdentifier($id);
        return $result->getFirstRow(BuildingModel::class);
    }
}
