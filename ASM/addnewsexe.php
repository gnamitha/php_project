<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agriculture_mgnt_system";
session_start();

$head=$_POST["head"];
$detail=$_POST["detail"];
$date = date('Y/m/d', time());

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO news (newshead, newsdetail, dateadded)
VALUES ('$head', '$detail', '$date')";

if (mysqli_query($conn, $sql)) {
 header('Location:AdminMain.php');

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>