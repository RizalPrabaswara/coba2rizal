<?php

declare(strict_types=1);

namespace coba2rizal\Provider;

use coba2rizal\Model\RoomModel;
use coba2rizal\Repository\RoomRepository;
use Itseasy\Model\CollectionModel;
use Traversable;

class RoomProvider
{
    protected $roomRepository;

    public function __construct(RoomRepository $roomRepository)
    {
        $this->roomRepository = $roomRepository;
    }

    public function listRoom(): Traversable
    {
        $result = $this->roomRepository->getRows();
        return $result->getRows(new CollectionModel(new RoomModel()));
    }

    public function getRoomById(int $id): RoomModel
    {
        $result = $this->roomRepository->getRowByIdentifier($id);
        return $result->getFirstRow(RoomModel::class);
    }
}
