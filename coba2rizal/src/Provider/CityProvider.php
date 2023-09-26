<?php

declare(strict_types=1);

namespace coba2rizal\Provider;

use coba2rizal\Model\CityModel;
use coba2rizal\Repository\CityRepository;
use Itseasy\Model\CollectionModel;
use Traversable;

class CityProvider
{
    protected $cityRepository;

    public function __construct(CityRepository $cityRepository)
    {
        $this->cityRepository = $cityRepository;
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

    public function getCityById(int $id): CityModel
    {
        $result = $this->cityRepository->getRowByIdentifier($id);
        return $result->getFirstRow(CityModel::class);
    }
}
