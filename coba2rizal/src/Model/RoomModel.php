<?php

declare(strict_types=1);

namespace coba2rizal\Model;

use Itseasy\Model\AbstractModel;
use Itseasy\Model\RecordModel;

/**
 * @property int $id
 * @property int $id_building
 * @property int $id_floor
 * @property string $room_name
 * @property string $room_status
 */

class RoomModel extends AbstractModel
{
    protected $id;
    protected $id_building;
    protected $id_floor;
    protected $room_name;
    protected $room_status;

    public function setId(?int $id)
    {
        $this->id = intval($id) ?: null;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setIdBuilding(?int $id_building)
    {
        $this->id_building = intval($id_building) ?: null;
    }

    public function getIdBuilding()
    {
        return $this->id_building;
    }

    public function setIdFloor(?int $id_floor)
    {
        $this->id_floor = intval($id_floor) ?: null;
    }

    public function getIdFloor()
    {
        return $this->id_floor;
    }

    public function setRoomName(?string $room_name)
    {
        $this->room_name = $room_name;
    }

    public function getRoomName()
    {
        return $this->room_name;
    }
}
