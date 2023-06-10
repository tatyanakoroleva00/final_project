<?php
require 'DBConnect.php';

class Categories {
    public static function getFreshIdeasCategories() {
        $category_name = $_GET['category_name'];

        $pdo = DBConnect::getConnection();

        $query = "SELECT image, type, name
        FROM categories
        WHERE type = 'horizontal' 
        AND name = ?;";

        $result = $pdo->prepare($query);
        $result->execute([$category_name]);
        return $result->fetchAll();
        }
    }