<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "hostel";

$conn = mysqli_connect($server, $user, $password, $db);
if (!$conn) {
    echo "connection failed!!!!!!!!!!";
}
else {
    echo "<script> connection successful </script>";
}