<?php
require '../../../models/DBConnect.php';

$categories = $_GET('category_name');

class Categories {

    public static function getAllCategoriesItems() {

        $pdo = DBConnect::getConnection();

        $query = "SELECT image
        FROM categories
        WHERE category = $categories;";

        return $pdo->query($query)->fetchAll();
    }




}