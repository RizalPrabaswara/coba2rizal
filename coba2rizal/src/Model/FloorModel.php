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

class RoomModel extends RecordModel
{
    protected $id;
    protected $id_building;
    protected $floor_name;
    protected $number_of_rooms;
    protected $floor_status;
}
