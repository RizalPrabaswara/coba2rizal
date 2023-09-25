<?php

declare(strict_types=1);

namespace coba2rizal\Service;

use coba2rizal\Model\RoomModel;
use coba2rizal\Repository\RoomRepository;

class RoomService
{
    protected $roomRepository;

    public function __construct(RoomRepository $roomRepository)
    {
        $this->roomRepository = $roomRepository;
    }

    public function save(RoomModel $room)
    {
        return $this->roomRepository->upsert($room);
    }

    public function remove(RoomModel $room): bool
    {
        $result = $this->roomRepository->delete(["id" => $room->id]);
        if ($result->isError()) {
            return false;
        }
        return true;
    }
}
