<?php
include 'database.php';
$path = '';
$allow = null;
session_start();
$userid = $_SESSION['uid'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $image = $_FILES['link']['name'];
    $folder = "uploads/";
    $target_file = $folder . basename($_FILES['link']["name"]);
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    $allowed = array('mp3', 'm4a', 'aac', 'wma');
    $filename = $_FILES['link']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $file = pathinfo($target_file, PATHINFO_FILENAME);
    if (!in_array($ext, $allowed)) {
        $allow = "Sorry, only audio files are allowed";
    } else {
        $path = $folder . $image;
        $temp = "$file . date('s') . date('i') . '.' . $imageFileType";
        $target_file = $path;
        move_uploaded_file($_FILES['link']['tmp_name'], $path);
        $test = "INSERT INTO `useraudio` ( `file`, `UID`) VALUES ('$image' ,'$userid')";
        $res = mysqli_query($conn, $test);
        $fetch = "SELECT * FROM `useraudio` WHERE `UID`='$userid'";
        $out = mysqli_query($conn, $fetch);
        $row = mysqli_fetch_assoc($out);
        header("location:audiorecord.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audio Player</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background-color: #DDAF94;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Media Player</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="selection.php">Selection<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="videoplayer.php">Videoplayer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="audioplayer.php">Audio player</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <br><br>
    <center>
        <?php
        if ($allow) {
            echo "<h1> <center>" . $allow . "</center></h1>";
        }
        ?>
        <form method="post" action="audioplayer.php" enctype="multipart/form-data">
            <input type="file" id="link" name="link" required><br><br>
            <input type="submit" value="Play!" name="submit">
        </form>
    </center>
    <nav class="navbar fixed-bottom navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="ContactUs.php">
                        Contact Us
                        <span class="sr-only">
                            (current)
                        </span>
                    </a>
                </li>
    </nav>
</body>

</html>