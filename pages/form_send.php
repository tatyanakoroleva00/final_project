<?php
require '../models/DBConnect.php';

if (isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Message'])) {
    $pdo = DBConnect::getConnection();

    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];

    $query = "INSERT INTO messages (name, email, message)
VALUES (?, ?, ?);";

    $result = $pdo->prepare($query);
    $result->execute([$name, $email, $message]);

    header('Location: ../index.php');
}

index.php

//$user_message = "From: $name, Mail: $email, Message: $message";
//
//mail('tatianakoroleva_work@mail.ru','Message from users', $user_message);