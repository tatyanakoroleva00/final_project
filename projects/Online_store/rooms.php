<?php
require 'views/header-view.php';

require 'models/Rooms.php';
$rooms = Rooms::getAllRoomsItems();


var_dump($rooms);



require 'views/footer-view.php';
