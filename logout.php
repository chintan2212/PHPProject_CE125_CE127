<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Logout</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            background-image: url("https://paulryan.com.au/wp-content/uploads/2015/01/high-resolution-wallpapers-25.jpg");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <form class="login-form" action="#" method="post">
        <h2>Online Media Player</h2>
        <h3 style="color:red;">LOGOUT SUCCESSFUL</h3>
        <h4 style="color:red;">Click <a href="login.php">here </a>to login again.</h4>
    </form>
</body>

</html>