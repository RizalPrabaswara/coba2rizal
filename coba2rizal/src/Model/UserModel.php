<?php
declare(strict_types=1);

namespace coba2rizal\Model;

use Itseasy\Model\AbstractModel;

/**
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password
 */

class UserModel extends AbstractModel {
    protected $id;
    protected $username;
    protected $email;
    protected $password;
}
