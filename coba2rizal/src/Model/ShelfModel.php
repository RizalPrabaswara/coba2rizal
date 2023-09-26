<?php

declare(strict_types=1);

namespace coba2rizal\Model;

use Itseasy\Model\AbstractModel;
use Itseasy\Model\RecordModel;

/**
 * @property int $id
 * @property int $id_room
 * @property string $shelf_name
 * @property int $shelf_unit
 * @property string $status
 */

class ShelfModel extends AbstractModel
{
    protected $id;
    protected $id_room;
    protected $shelf_name;
    protected $shelf_unit;
    protected $status;

    public function setId($id)
    {
        $this->id = intval($id);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setIdRoom($id_room)
    {
        $this->id_room = intval($id_room);
    }

    public function getIdRoom()
    {
        return $this->id_room;
    }

    public function setShelfName(?string $shelf_name)
    {
        $this->shelf_name = $shelf_name;
    }

    public function getShelfName()
    {
        return $this->shelf_name;
    }

    public function setShelfUnit($shelf_unit)
    {
        $this->shelf_unit = intval($shelf_unit);
    }

    public function getShelfUnit()
    {
        return $this->shelf_unit;
    }

    public function setStatus(?string $status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }
}
