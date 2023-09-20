<?php

declare(strict_types=1);

namespace coba2rizal\Model;

use Itseasy\Model\AbstractModel;

/**
 * @property int $id
 * @property int $id_shelf
 * @property string $slot_name
 * @property string $status
 * @property date $slot_creation_date
 * @property date $slot_modification_date
 */

class SlotModel extends AbstractModel
{
    protected $id;
    protected $id_shelf;
    protected $slot_name;
    protected $status;
    protected $slot_creation_date;
    protected $slot_modification_date;
}
