<?php

declare(strict_types=1);

namespace coba2rizal\Model;

use Itseasy\Model\AbstractModel;

/**
 * @property int $id
 * @property int $id_shelf
 * @property string $shelf_name
 * @property string $status
 */

class ShelfModel extends AbstractModel
{
    protected $id;
    protected $id_shelf;
    protected $shelf_name;
    protected $status;
}
