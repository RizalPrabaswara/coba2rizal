<?php
declare(strict_types=1);

namespace coba2rizal\Provider;

use coba2rizal\Model\UserModel;
use coba2rizal\Repository\UserRepository;
use Itseasy\Model\CollectionModel;
use Traversable;

class UserProvider {
    protected $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function listUser(): Traversable
    {
        $result = $this->userRepository->getRows();
        return $result->getRows(new CollectionModel(new UserModel()));
    }

    public function getUserById(int $id): UserModel
    {
        $result = $this->userRepository->getRowByIdentifier($id);
        return $result->getFirstRow(UserModel::class);
    }
}
