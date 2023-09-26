<?php

declare(strict_types=1);

namespace coba2rizal\Model;

use Itseasy\Model\AbstractModel;
use Itseasy\Model\CollectionModel;
use Itseasy\Model\RecordModel;

/**
 * @property int $id
 * @property int $id_city
 * @property string $building_name
 * @property string $location
 * @property string $postal_code
 * @property string $address
 * @property string $size
 * @property string $height
 * @property int $floor_level
 * @property collection $rooms
 * @property string $city
 */

//class BuildingModel extends CityModel
class BuildingModel extends AbstractModel
{
    protected $id;
    protected $id_city;
    protected $building_name;
    protected $location;
    protected $postal_code;
    protected $address;
    protected $size;
    protected $height;
    protected $floor_level;

    // private $city;
    // private $floors;

    public function __construct()
    {
        //$this->cities = new CollectionModel(CityModel::class);
        //$this->floors = new CollectionModel(RoomModel::class);
    }

    public function getCityName()
    {
        $this->floors = new CollectionModel(FloorModel::class);
        return $this->floors->floor_name ?? false;
    }

    public function setId($id)
    {
        $this->id = intval($id);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setIdCity($id_city)
    {
        $this->id_city = intval($id_city);
    }

    public function getIdCity()
    {
        return $this->id_city;
    }

    public function setBuildingName(?string $building_name)
    {
        $this->building_name = $building_name;
    }

    public function getBuildingName()
    {
        return $this->building_name;
    }

    public function setLocation(?string $location)
    {
        $this->location = $location;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setPostalCode(?string $postal_code)
    {
        $this->postal_code = $postal_code;
    }

    public function getPostalCode()
    {
        return $this->postal_code;
    }

    public function setAddress(?string $address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setSize(?string $size)
    {
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setHeight(?string $height)
    {
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setFloorLevel($floor_level)
    {
        $this->floor_level = intval($floor_level);
    }

    public function getFloorLevel()
    {
        return $this->floor_level;
    }
}
