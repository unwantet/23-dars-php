<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register/Login</title>
    
</head>
<body>

    <div class="content">
        <h1><a href="users/register">REGISTER</a></h1>
        <h1><a href="users/login">LOGIN</a></h1>
    </div>

</body>
</html>