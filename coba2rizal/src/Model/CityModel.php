<?php

declare(strict_types=1);

namespace coba2rizal\Model;

use Itseasy\Model\AbstractModel;

/**
 * @property int $id
 * @property string $city_name
 */

class CityModel extends AbstractModel
{
    protected $id;
    protected $city_name;

    //protected $name = 'Building';

    // public function __construct($id, $city_name)
    // {
    //     $this->id = $id;
    //     $this->city_name = $city_name;
    //     //$this->load->model(BuildingModel::class);
    //     //$this->city_name = BuildingModel::class;
    // }

    public function setIdCity($id)
    {
        $this->id = $id;
    }

    public function getIdCity()
    {
        return $this->id;
    }

    public function setCityName($city_name)
    {
        $this->city_name = $city_name;
    }

    public function getName()
    {
        return $this->city_name;
    }

    // public function getCityNameID()
    // {
    //     return $this->city_name;
    // }

    // public function building()
    // {
    //     return $this->HasMany(BuildingModel::class, 'id_city');
    // }
}
