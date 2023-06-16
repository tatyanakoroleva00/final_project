<?php
require 'DBConnect.php';

class Users
{
    //verifying if the login is unique in DB
    public static function checkLoginUnique($login){
        $pdo = DBConnect::getConnection();

        $query = "SELECT login
							FROM users
							WHERE login = ?";
        $result =	$pdo->prepare($query);
        $result->execute([$login]);

        return $result->rowCount();
    }

   //checking if email is unique
    public static function checkEmailUnique($email){
        $pdo = DBConnect::getConnection();

        $query = "SELECT email
							FROM users
							WHERE email = ?";

        $result =	$pdo->prepare($query);
        $result->execute([$email]);

        return $result->rowCount();
    }

    //method to add a new user to BD

    public static function addNewUser($user){
        $pdo = DBConnect::getConnection(); //

        $query = "INSERT INTO users (first_name, last_name, login, email, password)
							VALUES(?, ?, ?, ?, ?)";

        $result = $pdo->prepare($query);
        $result->execute([$user['first_name'], $user['last_name'], $user['login'],
            $user['email'], $user['password']]);

        return $pdo->lastInsertId();

    }
}