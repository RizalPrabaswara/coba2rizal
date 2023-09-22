<?php

declare(strict_types=1);

namespace coba2rizal\Model;

use Itseasy\Model\AbstractModel;

/**
 * @property int $id
 * @property int $id_city
 * @property string $building_name
 * @property string $cities
 */

class BuildingModel extends AbstractModel
{
    protected $id;
    protected $id_city;
    protected $city;
    protected $building_name;

    //protected $cities;

    // public function __construct($id, CityModel $city, $building_name)
    // {
    //     $this->id = $id;
    //     $this->building_name = $building_name;
    //     $this->city = $city;
    // }

    public function getId()
    {
        return $this->id;
    }

    public function getBuildingName()
    {
        return $this->building_name;
    }

    public function setCity(CityModel $city)
    {
        $this->city = $city;
        //return $this->city = $city_name;
    }

    public function getCity()
    {
        return $this->city;
    }
    // /**
    //  * @param City[] $categories
    //  * @return self
    //  */
    // public function setCities(array $cities)
    // {
    //     $this->cities = $cities;
    //     return $this;
    // }

    // /**
    //  * @return City[]
    //  */
    // public function getCities()
    // {
    //     return $this->cities;
    // }

    // public ?CityModel $cityClass = null;

    // public function __construct(int $id_city = 0)
    // {
    //     $this->cityClass = new CityModel($id_city, '');
    // }


    // public function getSharedUploadsForUserId($city_id)
    // {
    //     $city_id = (int) $city_id;
    //     $rowset = $this->tableGateway->select(function (\Laminas\Db\Sql\Select $select) use ($city_id) {
    //         $select->where(array('city_id' => $city_id));
    //         $select->join('City', 'City.id = Building.id_city');
    //     });
    //     Debug::dump($rowset);
    //     return $rowset;
    // }

    /** @var Laminas\Db\Adapter\Driver\StatementInterface $statement */
    public function getCityName()
    {
        $statement = $this->adapter->query('SELECT `city_name` FROM `city` JOIN `Building` ON `city.id = Building.id_city`');
        $result    = $statement->execute();
        return $result;
        // $select = new \Laminas\Db\Sql\Select;
        // $select->from('Building');
        // $select->join('City', 'City.id = Building.id_city');

        // $resultSet = $this->tableGateway->selectWith($select);

        // return $resultSet;
        //     $this->cityClass = new CityModel();
        //     return $this->cityClass->city_name;
        // $sql    = new Sql($this->db);
        // $select = $sql->select->from(['b' => 'Building'])
        //     ->join(
        //         ['c' => 'City'],        // join table with alias
        //         'b.city_id = c.id'  // join expression
        //     );
        // $stmt   = $sql->prepareStatementForSqlObject($select);
        // $result = $stmt->execute();
        // return $result;
    }

    // public function exchangeArray(array $data): array
    // {
    //     $this->cityClass = new CityModel();
    //     $this->cityClass->db->$this->cityClass->code = ($data['id'] ?? '');
    // }

    // public function toArray()
    // {
    //     $attributes = get_object_vars($this);
    //     unset($attributes['cityClass']);
    //     $attributes['city_id'] = $this->cityClass->code;
    //     return $attributes;
    // }

    // function getNameById($cityId)
    // {
    //     $this->cityClass = new CityModel();
    //     return $this->cityClass->city_name;
    // }

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
