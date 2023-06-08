<?php
require '../../../models/DBConnect.php';

$categories = $_GET('category_name');

class Categories {

    public static function getLimitedNumberOfCategoriesItems() {
        $pdo = DBConnect::getConnection();


    }




}