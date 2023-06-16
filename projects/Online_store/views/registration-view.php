<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="styles/form.css">
</head>
<body>

<div class="box">
<!-- ФОРМА РЕГИСТРАЦИИ ----------->
    <form action="" method="post">
        <h1 class="reg-form__name">Registration</h1>

<!--        <label class="login">First Name</label>-->
        <input type="text" name="first_name" value="<?=$input['first_name'] ?? ''?>" placeholder="Enter your First name" />
        <span class="input-error"><?= $errors['first_name'] ?? ''?></span>

<!--        <label class="login">Last Name</label>-->
        <input type="text" name="last_name" value="<?=$input['last_name'] ?? ''?>" placeholder="Enter your Last name"/>
        <span class="input-error"><?=$errors['last_name'] ?? ''?></span>

<!--        <label class="login">Login</label>-->
        <input type="text" name="login" value="<?=$input['login'] ?? ''?>" placeholder="Create a login"/>
        <span class="input-error"><?=$errors['login'] ?? ''?></span>

<!--        <label class="email">Email</label>-->
        <input type="email" name="email" value="<?=$input['email'] ?? ''?>" placeholder="Enter your email"/>
        <span class="input-error"><?=$errors['email'] ?? ''?></span>

<!--        <label class="password">Password</label>-->
        <input type="password" name="password" value="<?=$input['password'] ?? ''?>" placeholder="Create a password" />
        <span class="input-error"><?=$errors['password'] ?? ''?></span>

<!--        <label class="password">Password Confirmation</label>-->
<!--        <input type="password" name="password_confirm" placeholder="Confirm a password"/>-->

        <p><input type="checkbox" name="terms" value="1"> <a href="#">I accept all terms & conditions</a>
        <input type="hidden" value="0"> </p>

        <input class="button" type="submit" value="Register Now">

        <p>Already have an account? <a class="link" href="login.php">Login now!</a></p>

    </form>

</div>
</body>
</html>