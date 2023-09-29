<?php

declare(strict_types=1);

namespace coba2rizal\Provider;

use coba2rizal\Model\BuildingModel;
use coba2rizal\Model\CityModel;
use coba2rizal\Repository\BuildingRepository;
use coba2rizal\Repository\CityRepository;
use Itseasy\Model\CollectionModel;
use Traversable;

class CityProvider
{
    protected $cityRepository;
    protected $buildingRepository;

    //public function __construct(CityRepository $cityRepository)
    public function __construct(CityRepository $cityRepository, BuildingRepository $buildingRepository)
    {
        $this->cityRepository = $cityRepository;
        $this->buildingRepository = $buildingRepository;
    }

    public function listCity(): Traversable
    {
        //$kota = array("city_name='Surabaya'");
        //$limit = 3;
        //$kota = array("city_name='Jakarta'", "Surabaya");
        $result = $this->cityRepository->getRows();
        //$result = $this->cityRepository->getRows(array_values($kota), NULL, NULL, $limit);
        return $result->getRows(new CollectionModel(new CityModel()));
    }

    /*
    *Mencoba Fungsi getRowCount()
    */
    public function getCountryCount(): int
    //public function getCountryCount(?int $data): int
    {
        //$buildingRepository = new BuildingRepository();
        // $where2 = array("id_city IN (SELECT id_city FROM building GROUP BY id_city HAVING COUNT(id_city)=1);");
        // $result2 = $this->buildingRepository->getRowCount($where2);
        // return $result2;
        //$where = array("id_city={$data}");
        //$result = $this->buildingRepository->getRowCount($where);
        $result = $this->buildingRepository->getRowCount();
        return $result;
    }

    public function getCityById(int $id): CityModel
    {
        $result = $this->cityRepository->getRowByIdentifier($id);
        return $result->getFirstRow(CityModel::class);
    }
}
