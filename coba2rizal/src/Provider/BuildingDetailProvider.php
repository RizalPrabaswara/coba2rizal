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

class BuildingDetailProvider
{
    protected $buildingRepository;
    protected $cityRepository;
    //protected $table = 'Building';

    public function __construct(BuildingRepository $buildingRepository, CityRepository $cityRepository)
    {
        $this->buildingRepository = $buildingRepository;
        $this->cityRepository = $cityRepository;
    }

    public function listCity(): Traversable
    {
        $result = $this->cityRepository->getRows();
        //$result->join(new CollectionModel(new CityModel()));
        return $result->getRows(new CollectionModel(new CityModel()));
    }
}
