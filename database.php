<?php
$server = "localhost";
$username = "root";
$pass = "";
$database = "phpdata";
$conn = mysqli_connect($server, $username, $pass, $database) or die("Connection Failed" . mysqli_error(($conn)));
