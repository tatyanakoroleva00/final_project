<?php
require 'DBConnect.php';

$rooms = $_GET('room_name');
d($rooms);

class Rooms {

    public static function getAllRoomsItems() {
        $pdo = DBConnect::getConnection();

        $query = "SELECT image
        FROM rooms
        WHERE category = ?;";

        $result = $pdo->prepare($query);
        $result->execute([$rooms]);
        return $result -> fetchAll();
    }
}