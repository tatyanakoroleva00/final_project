<?php
require 'DBConnect.php';


class Posts {
    public static function getLimitedNumberOfPosts() {
        $pdo = DBConnect::getConnection();

        $query = "SELECT id, short_text, full_text, add_date, image
        FROM blog
        ORDER BY add_date DESC
        LIMIT 3;";

        return $pdo->query($query)->fetchAll();
    }

    public static function getAllPosts() {
        $pdo = DBConnect::getConnection();

        $query = "SELECT id, short_text, full_text, add_date, image
        FROM blog
        ORDER BY add_date DESC;";

        return $pdo->query($query)->fetchAll();
    }
}
