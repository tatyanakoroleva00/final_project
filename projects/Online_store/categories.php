<?php
require 'views/header-view.php';
require 'models/Categories.php';

$categories = Categories::getAllCategoriesItems();



require 'views/footer-view.php';