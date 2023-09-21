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

    public ?CityModel $cityClass = null;

    public function __construct(int $id = 0, string $building_name = '', int $id_city = 0)
    {
        // $this->id = $id;
        // $this->building_name = $building_name;
        $this->cityClass = new CityModel($id_city, '');
    }

    public function getArrayCopy(): array
    {
    }

    // public function exchangeArray(array $data): array
    // {
    //     $this->id = ((int) $data['id'] ?? 0);
    //     $this->building_name = ($data['building_name'] ?? '');
    //     $this->cityClass = new CityModel();
    //     $this->cityClass->id = ((int) $data['id'] ?? 0);
    //     $this->cityClass->city_name = ($data['city_name'] ?? '');
    // }

    public function toArray()
    {
        $attributes = get_object_vars($this);
        $attributes['id_city'] = $attributes['cityClass']->id;
        unset($attributes['cityClass']);
        return $attributes;
    }

    // public function city()
    // {
    //     return $this->BelongsTo(CityModel::class, 'id_city', 'id');
    // }
}
