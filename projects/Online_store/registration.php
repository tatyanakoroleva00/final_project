<?php
require 'models/signup.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>РЕГИСТРАЦИЯ</title>
    <link rel="stylesheet" href="styles/form.css">
</head>
<body>

<div class="box">
<!-- ФОРМА РЕГИСТРАЦИИ ----------->
    <form action="models/signup.php" method="post">
        <label class="reg-form__name">Registration</label>

        <label class="login">First Name</label>
        <input type="text" name="first_name" placeholder="Enter your First Name" />

        <label class="login">Last Name</label>
        <input type="text" name="last_name" placeholder="Enter your Last Name"/>

        <label class="login">Login</label>
        <input type="text" name="login" placeholder="Create a Login"/>

        <label class="login">Email</label>
        <input type="email" name="email" placeholder="Enter your Email"/>

        <label class="password">Password</label>
        <input type="password" name="password" placeholder="Create a Password" />

        <label class="password">Password Confirmation</label>
        <input type="password" name="password_confirm" placeholder="Confirm a Password"/>

<!--        <p><input type="checkbox" name="terms" value="1"> <a href="#">I accept all terms & conditions</a>-->
<!--        <input type="hidden" value="0"> </p>-->

        <input class="button" type="submit" value="Register Now">

        <p>Already have an account? <a class="link" href="login.php">Login now!</a></p>
    </form>

</div>
</body>
</html>