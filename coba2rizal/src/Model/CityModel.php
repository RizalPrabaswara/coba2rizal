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

    public function __construct()
    {
        //$this->load->model(BuildingModel::class);
        //$this->city_name = BuildingModel::class;
    }

    public function building()
    {
        return $this->HasMany(BuildingModel::class, 'id_city');
    }
}
