<?php
require 'DBConnect.php';

DBConnect::d($_POST);

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if($password === $password_confirm) {
    //author
} else {
        die('Пароли не совпадают');
    }