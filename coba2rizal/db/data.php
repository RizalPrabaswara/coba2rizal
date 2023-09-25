<?php

use Laminas\Db\Sql\Insert;

return [
    function () {
        $insert = new Insert("user");
        $insert->columns(["username", "email", "password"]);
        $insert->values(["admin", "admin@gmail.com", "888888"]);
        return $insert;
    },
    function () {
        $insert = new Insert("user");
        $insert->columns(["username", "email", "password"]);
        $insert->values(["supervisor", "supervisor@gmail.com", "888888"]);
        return $insert;
        //}
    },
    function () {
        $insert = new Insert("city");
        $insert->columns(["city_name", "country"]);
        $insert->values(["Surabaya", "Indonesia"]);
        return $insert;
    },
    function () {
        $insert = new Insert("city");
        $insert->columns(["city_name", "country"]);
        $insert->values(["Jakarta", "Indonesia"]);
        return $insert;
    },
    function () {
        $insert = new Insert("building");
        $insert->columns(["id_city", "building_name", "location", "postal_code", "address", "size", "height", "floor_level"]);
        $insert->values([1, "Graha Pena", "Surabaya", "60123", "Jl. Raya 26", "Small Enterprises", "high-rise", 8]);
        return $insert;
    },
    function () {
        $insert = new Insert("building");
        $insert->columns(["id_city", "building_name", "location", "postal_code", "address", "size", "height", "floor_level"]);
        $insert->values([2, "Graha Wismilak", "Sidoarjo", "70123", "Jl. Sidoarjo 26", "Large Enterprises", "skyscrappers", 100]);
        return $insert;
    },
    function () {
        $insert = new Insert("building");
        $insert->columns(["id_city", "building_name", "location", "postal_code", "address", "size", "height", "floor_level"]);
        $insert->values([1, "Graha Perjuangan", "Surabaya", "60121", "Jl. Brantas 26", "Medium Enterprises", "low-rise", 3]);
        return $insert;
    },
    function () {
        $insert = new Insert("building");
        $insert->columns(["id_city", "building_name", "location", "postal_code", "address", "size", "height", "floor_level"]);
        $insert->values([1, "Graha Pena", "Surabaya", "60153", "Jl. DVL 26", "Large Enterprises", "supertalls", 250]);
        return $insert;
    },
    function () {
        $insert = new Insert("shelf");
        $insert->columns(["id_building", "shelf_name", "status"]);
        $insert->values([1, "Shelf Robust", "Full"]);
        return $insert;
    },
    function () {
        $insert = new Insert("shelf");
        $insert->columns(["id_building", "shelf_name", "status"]);
        $insert->values([2, "Shelf Bookie", "Avalaible"]);
        return $insert;
    },
    function () {
        $insert = new Insert("slot");
        $insert->columns(["id_shelf", "id_unit", "slot_name", "status"]);
        $insert->values([1, 4, "Slot Pertama", "Full"]);
        return $insert;
    }
];
