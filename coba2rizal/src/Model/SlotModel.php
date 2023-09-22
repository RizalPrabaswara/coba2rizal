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
 */

class SlotModel extends RecordModel
{
    protected $id;
    protected $id_shelf;
    protected $id_unit;
    protected $slot_name;
    protected $status;
    // protected $slot_creation_date;
    // protected $slot_modification_date;
}
