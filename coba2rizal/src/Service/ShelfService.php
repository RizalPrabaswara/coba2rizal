<?php

declare(strict_types=1);

namespace coba2rizal\Service;

use coba2rizal\Model\ShelfModel;
use coba2rizal\Repository\ShelfRepository;

class ShelfService
{
    protected $shelfRepository;

    public function __construct(ShelfRepository $shelfRepository)
    {
        $this->shelfRepository = $shelfRepository;
    }

    public function save(ShelfModel $shelf)
    {
        return $this->shelfRepository->upsert($shelf);
    }

    public function remove(ShelfModel $shelf): bool
    {
        $result = $this->shelfRepository->delete(["id" => $shelf->id]);
        if ($result->isError()) {
            return false;
        }
        return true;
    }
}
