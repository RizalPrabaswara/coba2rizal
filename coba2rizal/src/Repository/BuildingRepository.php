<?php

declare(strict_types=1);

namespace coba2rizal\Repository;

use coba2rizal\Model\BuildingModel;

use Itseasy\Repository\AbstractRepository;

class BuildingRepository extends AbstractRepository
{
    protected function defineSqlFilter(): void
    {
    }

    protected function join()
    {
        $select = new Select();
        $select
            ->from(['b' => 'Building'])     // base table
            ->join(
                ['c' => 'City'],        // join table with alias
                'b.id_city = c.id'  // join expression
            );
        return json_encode($select);
    }

    // public function fetchCityById(int $id_city)
    // {
    //     $sqlQuery = $this->sql->select()
    //         ->join('City', 'City.id=' . $this->table . '.id_city', ['id', 'city_name'])
    //         ->where(['id_city' => $id_city]);
    //     $sqlStmt = $this->sql->prepareStatementForSqlObject($sqlQuery);
    //     $handler = $sqlStmt->execute()->current();

    //     if (!$handler) {
    //         return null;
    //     }

    //     $classMethod = new ClassMethodsHydrator();
    //     $entity = new UserEntity();
    //     $classMethod->hydrate($handler, $entity);

    //     return $entity;
    // }

    // public function join()
    // {
    //     // $sql = new Sql($this->adapter);
    //     // $select = $sql->select();
    //     // $select->from('Building');
    //     // $select->columns([
    //     //     'id_city',
    //     // ]);
    //     // $select->join(
    //     //     ['C' => 'City'],
    //     //     'B.id_city = C.id',
    //     //     ['id_city'],
    //     //     $select::JOIN_LEFT
    //     // );
    //     // $statement = $sql->prepareStatementForSqlObject($select);
    //     // $resultSet = $statement->execute(['en']);
    //     // return $resultSet;

    //     $select = new Select();
    //     $select
    //         ->from(['b' => 'Building'])     // base table
    //         ->join(
    //             ['c' => 'City'],        // join table with alias
    //             'b.id_city = c.id'  // join expression
    //         );
    //     return json_encode($select);s
    // }
}
