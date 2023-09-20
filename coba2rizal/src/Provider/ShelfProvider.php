<?php

declare(strict_types=1);

namespace coba2rizal\Provider;

use coba2rizal\Model\ShelfModel;
use coba2rizal\Repository\ShelfRepository;
use Itseasy\Model\CollectionModel;
use Traversable;

class ShelfProvider
{
    protected $shelfRepository;

    public function __construct(ShelfRepository $shelfRepository)
    {
        $this->shelfRepository = $shelfRepository;
    }

    public function listCity(): Traversable
    {
        $result = $this->shelfRepository->getRows();
        return $result->getRows(new CollectionModel(new ShelfModel()));
    }

    public function getUserById(int $id): ShelfModel
    {
        $result = $this->shelfRepository->getRowByIdentifier($id);
        return $result->getFirstRow(ShelfModel::class);
    }
}
