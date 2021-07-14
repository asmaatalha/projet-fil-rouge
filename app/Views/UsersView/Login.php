<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LogIn</h1>
    <form action="<?php echo URLROOT; ?>/UsersView/Login" method="post">

        <input type="email" name="email" placeholder="Email">

        <input type="password" name="password" placeholder="Password">

        <input type="submit" name="submit" value="Submit">

        <a href="<?php echo URLROOT;?>/UserController/SignUp">SignUp</a>
        
    </form>
</body>
</html>