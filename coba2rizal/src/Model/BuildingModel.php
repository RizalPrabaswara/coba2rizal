<?php

declare(strict_types=1);

namespace coba2rizal\Model;

use Itseasy\Model\AbstractModel;

/**
 * @property int $id
 * @property int $id_city
 * @property string $building_name
 */

class BuildingModel extends AbstractModel
{
    protected $id;
    protected $id_city;
    protected $building_name;

    public function city()
    {
        return $this->BelongsTo(CityModel::class, 'id_city', 'id');
    }
}
