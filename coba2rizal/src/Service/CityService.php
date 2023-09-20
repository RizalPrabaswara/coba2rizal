<?php

declare(strict_types=1);

namespace coba2rizal\Service;

use coba2rizal\Model\CityModel;
use coba2rizal\Repository\CityRepository;

class CityService
{
    protected $cityRepository;

    public function __construct(CityRepository $cityRepository)
    {
        $this->cityRepository = $cityRepository;
    }

    public function save(CityModel $city)
    {
        return $this->cityRepository->upsert($city);
    }

    public function remove(CityModel $city): bool
    {
        $result = $this->cityRepository->delete(["id" => $city->id]);
        if ($result->isError()) {
            return false;
        }
        return true;
    }
}
