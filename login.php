<!--php for login-->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = false;
    include 'database.php';
    $uname = $_POST["uname"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM `userdata` WHERE `username`='$uname' and `password`='$password'";
    if ($sql) {
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num > 1) {
            echo "Validation Failed";
        }
        if ($num == 1) {
            $login = true;
            $row = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['login'] = $login;
            $_SESSION['username'] = $uname;
            $_SESSION['uid'] = $row['UID'];
            header("location:selection.php");     //to redirect the pages
        } else {
            header("location:invalidlogin.php");
        }
    }
}
?>

<!--login form-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    <form class="login-form" action="login.php" method="post">
        <h2>Online Media Player</h2>
        <h3>Login</h3>
        <div class="form-input-material">
            <label for="username">Username</label></br>
            <input type="text" name="uname" id="uname" placeholder="Username" autocomplete="off" class="form-control-material" required /></br></br>
        </div>
        <div class="form-input-material">
            <label for="password">Password</label></br>
            <input type="password" name="password" id="password" placeholder="Password" autocomplete="off" class="form-control-material" required />
        </div></br>

        <button type="submit" class="btn btn-primary btn-ghost">Login</button></br>
        <a style="color:blue;" href="signup.php">Create a new account</a>
    </form>
</body>

</html>