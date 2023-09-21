<?php

declare(strict_types=1);

namespace coba2rizal\Model;

use Itseasy\Model\AbstractModel;
use Laminas\Db\TableGateway\TableGateway;
use Laminas\Paginator\Adapter\DbSelect;

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

    private $db;

    // public ?CityModel $cityClass = null;

    // public function __construct(int $id_city = 0)
    // {
    //     $this->cityClass = new CityModel($id_city, '');
    // }

    public function getBuildingName()
    {
        return $this->building_name;
    }

    // public function getCityName()
    // {
    //     $this->cityClass = new CityModel();
    //     return $this->cityClass->city_name;
    //     // $sql    = new Sql($this->db);
    //     // $select = $sql->select('City');
    //     // $stmt   = $sql->prepareStatementForSqlObject($select);
    //     // $result = $stmt->execute();
    //     // return $result;
    // }

    // public function exchangeArray(array $data): array
    // {
    //     $this->cityClass = new CityModel();
    //     $this->cityClass->db->$this->cityClass->code = ($data['id'] ?? '');
    // }

    public function toArray()
    {
        $attributes = get_object_vars($this);
        unset($attributes['cityClass']);
        $attributes['city_id'] = $this->cityClass->code;
        return $attributes;
    }

    // public function getAll(): iterable
    // {
    //     $select = new Select($this->tableGateway->getTable());
    //     $select->join('City', 'City.id = Building.id_city', [
    //         'city_name' => 'name'
    //     ]);
    //     $rowSet = $this->tableGateway->selectWith($select);
    //     return $rowSet;
    // }

    // public function cityClass()
    // {
    //     $select = new Select($this->tableGateway->getTable());
    //     $select->join('City', 'City.id = Building.id_city', [
    //         'city_name' => 'name'
    //     ]);
    //     $rowSet = $this->tableGateway->selectWith($select);
    //     return $rowSet;
    //     //return $this->BelongsTo(CityModel::class, 'id_city', 'id');
    // }
}
