<?php
declare(strict_types=1);

namespace coba2rizal\Service;

use coba2rizal\Model\UserModel;
use coba2rizal\Repository\UserRepository;

class UserService {
    protected $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function save(UserModel $user)
    {
        return $this->userRepository->upsert($user);
    }

    public function remove(UserModel $user): bool
    {
        $result = $this->userRepository->delete(["id" => $user->id]);
        if ($result->isError()) {
            return false;
        }
        return true;
    }
}
