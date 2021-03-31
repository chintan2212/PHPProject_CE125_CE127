<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != true) {
    header("location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Media Type</title>
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
    <br>
    <div class="card">
        <div class="card-header">
            Please Select One Option
        </div>
        <div class="card-body">
            <h5 class="card-title">Music Player</h5>
            <p class="card-text">"Music is The Strongest Form of Magic"</p>
            <p class="card-text"> -Marilyn Manson</p>
            <a href="audioplayer.php" class="btn btn-primary">Let's Go!</a>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            Please Select One Option
        </div>
        <div class="card-body">
            <h5 class="card-title">Video Player</h5>
            <p class="card-text">"If a picture is worth a thousand words what's a video worth?"</p>
            <p class="card-text"> -Anonymous</p>
            <a href="videoplayer.php" class="btn btn-primary">Let's Go!</a>
        </div>
    </div>
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