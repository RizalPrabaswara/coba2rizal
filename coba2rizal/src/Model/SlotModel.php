<?php

declare(strict_types=1);

namespace coba2rizal\Model;

use Itseasy\Model\AbstractModel;
use Itseasy\Model\RecordModel;

/**
 * @property int $id
 * @property int $id_shelf
 * @property int $id_unit
 * @property string $slot_name
 * @property string $status
 * @property date $slot_modification_date
 */

class SlotModel extends AbstractModel
{
    protected $id;
    protected $id_shelf;
    protected $id_unit;
    protected $slot_name;
    protected $status;
    // protected $slot_creation_date;
    protected $slot_modification_date;

    public function setId(?int $id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setIdShelf(?int $id_shelf)
    {
        $this->id_shelf = $id_shelf;
    }

    public function getIdShelf()
    {
        return $this->id_shelf;
    }

    public function setIdUnit(?int $id_unit)
    {
        $this->id_unit = $id_unit;
    }

    public function getIdUnit()
    {
        return $this->id_unit;
    }

    public function setSlotName(?string $slot_name)
    {
        $this->slot_name = $slot_name;
    }

    public function getSlotName()
    {
        return $this->slot_name;
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
