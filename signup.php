<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'database.php';
    $exists = false;
    $check = true;
    $UNAME = $_POST["uname"];
    if (!isset($_POST["uname"]))
        $exists = true;
    if (!isset($_POST["password"]))
        $exists = true;
    $EMAIL = $_POST["email"];
    $PASS = $_POST["password"];
    $sqltest = "SELECT * FROM `userdata` WHERE `username`='$UNAME'";
    $testres = mysqli_query($conn, $sqltest);
    if (mysqli_num_rows($testres) > 0) {
        $check = false;                    // to check user alreay exist or not
    } else {
        if ($exists == false) {
            $hash = Password_hash($PASS, PASSWORD_DEFAULT);               // making password hash
            $sql = "INSERT INTO `userdata` ( `username`, `password`, `email`) VALUES ( '$UNAME', '$PASS' ,'$EMAIL')";
            $result = mysqli_query($conn, $sql);         // for inserting data in to database
            header("location:login.php");
        } else
            echo "Username already exists";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SignUp</title>
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
    <form class="login-form" action="#" method="post">
        <h2>Online Media Player</h2>
        <h3>Sign Up</h3>
        <div class="form-input-material">
            <label for="username">Username</label></br>
            <input type="text" name="uname" id="uname" placeholder="Username" autocomplete="off" class="form-control-material" required /></br></br>
        </div>
        <div class="form-input-material">
            <label for="email">E-Mail Address</label></br>
            <input type="text" name="email" id="email" placeholder="E-Mail address" autocomplete="off" class="form-control-material" required /></br></br>
        </div>
        <div class="form-input-material">
            <label for="password">Password</label></br>
            <input type="password" name="password" id="password" placeholder="Password" autocomplete="off" class="form-control-material" required />
        </div></br>
        <button type="submit" class="btn btn-primary btn-ghost">SignUp!</button>
    </form>
</body>

</html>