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
 * @property int $temperature
 * @property string $room_status
 */

class RoomModel extends RecordModel
{
    protected $id;
    protected $id_building;
    protected $id_floor;
    protected $room_name;
    protected $temperature;
    protected $room_status;
}
