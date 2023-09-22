<?php

declare(strict_types=1);

namespace coba2rizal\Model;

use Itseasy\Model\AbstractModel;
use Itseasy\Model\RecordModel;
use coba2rizal\Model\BuildingModel;
use Itseasy\Model\CollectionModel;

/**
 * @property int $id
 * @property string $city_name
 * @property string $country
 * @property collection $buildings
 */

class CityModel extends RecordModel
{
    protected $id;
    protected $city_name;
    protected $country;

    protected $buildings;

    public function __construct()
    {
        $this->buildings = new CollectionModel(BuildingModel::class);
    }

    public function addBuilding($building)
    {
        $this->buildings->append($building);
    }

    // class BuildingCollection extends BuildingModel {
    //     public function __construct()
    //     {
    //     Parent::__construct(BuildingModel::class);
    //     }

    //     public function getBuildingByCity(string $name='')
    //     {
    //     return array_map($this->buildings as $building){
    //     $building->city_name = $name;
    //     }
    //     }
    //     }

    // public function setId(int $id): void
    // {
    //     $this->id = $id;
    // }

    // public function getId(): int
    // {
    //     return $this->id;
    // }

    // public function setCityName(string $city_name): void
    // {
    //     $this->city_name = "Kota " . $city_name;
    // }

    // public function getCityName(): string
    // {
    //     return $this->city_name;
    // }

    // public function setCountry(string $country): void
    // {
    //     $this->country = "Negara " . $country;
    // }

    // public function getCountry(): string
    // {
    //     return $this->country;
    // }

}
