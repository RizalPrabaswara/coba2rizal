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
        $insert = new Insert("City");
        $insert->columns(["city_name", "country"]);
        $insert->values(["Surabaya", "Indonesia"]);
        return $insert;
    },
    function () {
        $insert = new Insert("City");
        $insert->columns(["city_name", "country"]);
        $insert->values(["Jakarta", "Indonesia"]);
        return $insert;
    },
    function () {
        $insert = new Insert("Building");
        $insert->columns(["id_city", "building_name"]);
        $insert->values([1, "Graha Pena"]);
        return $insert;
    },
    function () {
        $insert = new Insert("Building");
        $insert->columns(["id_city", "building_name"]);
        $insert->values([2, "Graha Wismilak"]);
        return $insert;
    },
    function () {
        $insert = new Insert("Building");
        $insert->columns(["id_city", "building_name"]);
        $insert->values([1, "Graha Perjuangan"]);
        return $insert;
    },
    function () {
        $insert = new Insert("Building");
        $insert->columns(["id_city", "building_name"]);
        $insert->values([1, "Graha Pena"]);
        return $insert;
    },
    function () {
        $insert = new Insert("Shelf");
        $insert->columns(["id_building", "shelf_name", "status"]);
        $insert->values([1, "Shelf Robust", "Full"]);
        return $insert;
    },
    function () {
        $insert = new Insert("Shelf");
        $insert->columns(["id_building", "shelf_name", "status"]);
        $insert->values([2, "Shelf Bookie", "Avalaible"]);
        return $insert;
    },
    function () {
        $insert = new Insert("Slot");
        $insert->columns(["id_shelf", "slot_name", "status"]);
        $insert->values([1, "Slot Pertama", "Full"]);
        return $insert;
    }
];
