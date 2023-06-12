<?php

    session_start();
    require 'DBConnect.php';

    $pdo = DBConnect::getConnection();

    $login = $_POST['login'];
    $password = $_POST['password'];

    $query = "SELECT *
	FROM users
	WHERE login = ? AND password = ?;";
    $result =	$pdo->prepare($query);
    $result->execute([$login, $password]);
    $data = $result->rowCount();

    if ($data > 0) {
        $_SESSION['user'] = $login;
        header('Location: index.php');
    } else {
        echo 'error';
    }