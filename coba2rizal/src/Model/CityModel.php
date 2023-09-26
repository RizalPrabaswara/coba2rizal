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

class CityModel extends AbstractModel
{
    protected $id;
    protected $city_name;
    protected $country;

    private $buildings;

    public function __construct()
    {
        $this->buildings = new CollectionModel(BuildingModel::class);
    }

    public function getBuildingName()
    {
        return $this->buildings;
    }

    // public function addBuilding($building)
    // {
    //     $this->buildings->append($building);
    // }

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

    public function setId($id)
    {
        $this->id = intval($id);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setCityName(?string $city_name)
    {
        $this->city_name = $city_name;
    }

    public function getCityName()
    {
        return $this->city_name;
    }

    public function setCountry(?string $country)
    {
        $this->country = $country;
    }

    public function getCountry()
    {
        return $this->country;
    }
}
