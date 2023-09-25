<?php

declare(strict_types=1);

namespace coba2rizal\Provider;

use coba2rizal\Model\FloorModel;
use coba2rizal\Repository\FloorRepository;
use Itseasy\Model\CollectionModel;
use Traversable;

class FloorProvider
{
    protected $floorRepository;

    public function __construct(FloorRepository $floorRepository)
    {
        $this->floorRepository = $floorRepository;
    }

    public function listFloor(): Traversable
    {
        $result = $this->floorRepository->getRows();
        return $result->getRows(new CollectionModel(new FloorModel()));
    }

    public function getFloorById(int $id): FloorModel
    {
        $result = $this->floorRepository->getRowByIdentifier($id);
        return $result->getFirstRow(FloorModel::class);
    }
}
