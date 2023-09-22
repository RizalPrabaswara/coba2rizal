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

class ShelfModel extends RecordModel
{
    protected $id;
    protected $id_room;
    protected $shelf_name;
    protected $shelf_unit;
    protected $status;
}
