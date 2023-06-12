<?php

class SignUp
{
   //Method: checking first name

    private static function validateFirstName($firstName){
        $reg_exp = "/^[a-zA-Z]{2,}$/iu";

        if(strlen($firstName) === 0){ //if the string is empty
            return 'Enter your First name';
        } elseif (!preg_match($reg_exp, $firstName)){// If the str doesn't correspond to the reg expr
            return 'The name should be written in latin, no less than 2 letters long';
        }
    }

    //Method: checking last name

    private static function validateLastName($lastName){
        $reg_exp = "/^[a-zA-Z]{2,}$/iu";

        if(strlen($lastName) === 0){  //if the string is empty
            return 'Enter your Last name';
        }elseif (!preg_match($reg_exp, $lastName)){ // If the str doesn't correspond to the reg expr
            return 'The name should be written in latin, no less than 2 letters long';
        }
    }

    //Method: checking login

    private static function validateLogin($login){
        //letter should be the first, only latin letters and numbers
        $reg_exp = "/^[a-z][a-z0-9]+$/iu";

        if(strlen($login) === 0){
            return 'Enter your login';
        }elseif (!preg_match($reg_exp, $login)){
            return 'Only latin letters, numbers; start with a letter; no less than 2 letters';
        }

        // Checking if login is unique according to DB
        $rowCount = Users::checkLoginUnique($login);
        if($rowCount > 0){ // if there is already such login in DB, it means that it is not unique
            return 'This login already exists';
        }
    }

    //Email verification

    private static function validateEmail($email){
        $reg_exp = "/^.+@.+\..+$/u";

        if(strlen($email) === 0){
            return 'Enter your email';
        }elseif (!preg_match($reg_exp, $email)){
            return 'The email format is not correct';
        }

        //Checking if the mail is unique in DB
        $rowCount = Users::checkEmailUnique($email);
        if($rowCount > 0){ // if there is already such email in DB, it means that it is not unique
            return 'This email already exists';
        }

    }

    //Password verification//
    private static function validatePassword($password){
        $reg_exp = "/^.{6,}$/u";

        if(strlen($password) === 0){
            return 'Enter your password';
        }elseif (!preg_match($reg_exp, $password)){
            return 'Password should not be less than 6 symbols';
        }
    }
    
   //Checking all the data//

    public static function validateForm(){
//        DBConnect::d($_POST);

        $errors = [];
        $input = [];

        $input['first_name'] = htmlspecialchars(trim($_POST['first_name']));
        $input['last_name'] = htmlspecialchars(trim($_POST['last_name']));
        $input['login'] = htmlspecialchars(trim($_POST['login']));
        $input['email'] = htmlspecialchars(trim($_POST['email']));
        $input['password'] = htmlspecialchars(trim($_POST['password']));


        //checking the data

        // checking the name
        $firstNameError = self::validateFirstName($input['first_name']);
        if($firstNameError){// if there is a mistake in the name
            $errors['first_name'] = $firstNameError;
        }

        // checking the name
        $lastNameError = self::validateLastName($input['last_name']);
        if($lastNameError){
            $errors['last_name'] = $lastNameError;
        }

        // checking the login
        $loginError = self::validateLogin($input['login']);
        if($loginError){
            $errors['login'] = $loginError;
        }

        // checking the email
        $emailError = self::validateEmail($input['email']);
        if($emailError){
            $errors['email'] = $emailError;
        }

        // checking the password
        $passwordError = self::validatePassword($input['password']);
        if($passwordError){
            $errors['password'] = $passwordError;
        }


        //here we return the array with mistakes
        return [$errors, $input];
    }



    // method - if everything is good

    public static function processForm($input){
        // password - hash
//        $input['password'] = password_hash($input['password'], PASSWORD_DEFAULT); //EXCLUDED

        // adding a new line to the data base
        $input['user_id'] = Users::addNewUser($input);

        // write down all the data in the session
        session_start();
        $_SESSION['user_id'] = $input['user_id'];
        $_SESSION['valid_user'] = $input['login'];
//        $_SESSION['pass'] = $input['password']; //added

        // перенаправить на главную страницу
        header('Location: login.php');
    }

}
