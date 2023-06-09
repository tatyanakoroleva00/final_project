<?php
require 'DBConnect.php';


class Categories {

    public static function getAllCategoriesItems() {

        $pdo = DBConnect::getConnection();

        $query = "SELECT image
        FROM categories
        WHERE category = ?;";

        $categories = $_GET('category_name');

        $result = $pdo->prepare($query);
        $result->execute([$categories]);
        return $result->fetchAll();
    }




}