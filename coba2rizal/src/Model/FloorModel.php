<?php

declare(strict_types=1);

namespace coba2rizal\Model;

use Itseasy\Model\AbstractModel;
use Itseasy\Model\RecordModel;

/**
 * @property int $id
 * @property int $id_building
 * @property string $floor_name
 * @property int $number_of_rooms
 * @property string $floor_status
 */

class FloorModel extends AbstractModel
{
    protected $id;
    protected $id_building;
    protected $floor_name;
    protected $number_of_rooms;
    protected $floor_status;

    public function setId(?int $id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setIdBuilding(?int $id_building)
    {
        $this->id_building = $id_building;
    }

    public function getIdBuilding()
    {
        return $this->id_building;
    }

    public function setFloorName(?string $floor_name)
    {
        $this->floor_name = $floor_name;
    }

    public function getFloorName()
    {
        return $this->floor_name;
    }

    public function setNumberRoom(?int $number_of_rooms)
    {
        $this->number_of_rooms = $number_of_rooms;
    }

    public function getNumberRoom()
    {
        return $this->number_of_rooms;
    }

    public function setFloorStatus(?string $floor_status)
    {
        $this->floor_status = $floor_status;
    }

    public function getFloorStatus()
    {
        return $this->floor_status;
    }
}
