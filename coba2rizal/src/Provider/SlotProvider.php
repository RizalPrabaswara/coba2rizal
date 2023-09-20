<?php

declare(strict_types=1);

namespace coba2rizal\Provider;

use coba2rizal\Model\SlotModel;
use coba2rizal\Repository\SlotRepository;
use Itseasy\Model\CollectionModel;
use Traversable;

class SlotProvider
{
    protected $slotRepository;

    public function __construct(SlotRepository $slotRepository)
    {
        $this->slotRepository = $slotRepository;
    }

    public function listStatus(String $data): Traversable
    {
        $status = array("status='{$data}'");
        $result = $this->slotRepository->getRows(array_values($status));
        //$result = $this->slotRepository->getRowCount();
        return $result->getRows(new CollectionModel(new SlotModel()));
    }

    // public function listStatus(): Traversable
    // {
    //     $status = array("status='Avalaible'");
    //     $result = $this->slotRepository->getRows(array_values($status));
    //     //$result = $this->slotRepository->getRowCount();
    //     return $result->getRows(new CollectionModel(new SlotModel()));
    // }

    public function listCity(): Traversable
    {
        $result = $this->slotRepository->getRows();
        return $result->getRows(new CollectionModel(new SlotModel()));
    }

    public function getUserById(int $id): SlotModel
    {
        $result = $this->slotRepository->getRowByIdentifier($id);
        return $result->getFirstRow(SlotModel::class);
    }
}
