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

    protected $buildings;

    public function __construct()
    {
        $this->buildings = new CollectionModel(BuildingModel::class);
    }

    public function getBuildingName(BuildingModel $building)
    {
        return $this->buildings;
    }

    public function setId(?int $id)
    {
        $this->id = intval($id) ?: null;
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

    public function getArrayForDb(): array
    {
        return array($this->id);
        return array($this->city_name);
        return array($this->country);
    }
}
