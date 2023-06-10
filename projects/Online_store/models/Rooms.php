<?php
require 'DBConnect.php';

class Rooms {
    public static function getFreshIdeasRooms() {
        $room_name = $_GET['room_name'];

        $pdo = DBConnect::getConnection();

        $query = "SELECT image, type, name
        FROM rooms
        WHERE type = 'horizontal' 
        AND name = ?;";

        $result = $pdo->prepare($query);
        $result->execute([$room_name]);
        return $result->fetchAll();
    }
}