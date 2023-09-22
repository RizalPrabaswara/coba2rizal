<?php

declare(strict_types=1);

namespace coba2rizal\Provider;

use coba2rizal\Model\BuildingModel;
use coba2rizal\Model\CityModel;
use coba2rizal\Repository\BuildingRepository;
use Itseasy\Model\CollectionModel;
use Traversable;
use Laminas\Db\Sql\Select;

class BuildingProvider
{
    protected $buildingRepository;

    public function __construct(BuildingRepository $buildingRepository)
    {
        $this->buildingRepository = $buildingRepository;
    }

    public function join()
    {
        $select = new Select();
        $select
            ->from(['b' => 'Building'])     // base table
            ->join(
                ['c' => 'City'],        // join table with alias
                'b.id_city = c.id'  // join expression
            );
        return json_encode($select);
    }

    public function listCity(): Traversable
    {
        $result = $this->buildingRepository->getRows();
        //$result->join(new CityModel);
        return $result->getRows(new CollectionModel(new BuildingModel()));
    }

    public function getUserById(int $id): BuildingModel
    {
        $result = $this->buildingRepository->getRowByIdentifier($id);
        return $result->getFirstRow(BuildingModel::class);
    }
}
