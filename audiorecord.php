<?php
include 'database.php';
session_start();
$userid = $_SESSION['uid'];
$row_play = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['id']) {
        $id = $_POST['id'];
        $sql = "SELECT * FROM useraudio WHERE `ID`='$id'";
        $out = mysqli_query($conn, $sql);
        $row_play = mysqli_fetch_assoc($out);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stored Audios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    <?php
    $useraud = "SELECT * FROM useraudio WHERE `UID`=$userid";
    $data = mysqli_query($conn, $useraud);
    if ($data->num_rows > 0) {
        while ($row = $data->fetch_assoc()) {
            echo "Name : " . $row["file"] . '<form method="post" action="audiorecord.php">
        <input type="hidden" name="id" value="' . $row["ID"] . '"><input type="submit" name="Play" value="Play"> </form>' . "<br>";
        }
    } else {
        echo "No Data found for you.";
        echo "</br>";
    }
    ?>
    <center>
        <video controls autoplay>
            <source src="<?php echo $row_play['file'] ?>" type="audio/mp3">
        </video>
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