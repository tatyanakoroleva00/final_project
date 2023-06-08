<?php
require '../../../models/DBConnect.php';

class Rooms {

    public static function getLimitedNumberOfRoomsItems() {
        $pdo = DBConnect::getConnection();

        $query = "SELECT image
        FROM rooms
        LIMIT 5;";

        return



    }
}