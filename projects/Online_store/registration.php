<?php
require 'models/Users.php';
require 'models/SignUp.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') { //если форма отправления, то проверяем данные:
    list($errors, $input) = SignUp::validateForm();

    if($errors) { //а) если есть ошибки, то показываем форму регистрации
        require 'views/registration-view.php';
    } else { //б) если ошибок нет, то записываем данные пользователя в БД
        SignUp::processForm($input);
    }
} else { //Если впервые попадает на страничку, отображаем форму регистрации и начинаем собирать данные
    $input = [];
    $errors = [];
    require 'views/registration-view.php';
}