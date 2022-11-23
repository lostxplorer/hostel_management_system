<?php
require_once "include/DBconnect.php";


$room_no = $_POST['room_no'];
$floor = $_POST['floor'];
$room_type = $_POST['room_type'];
$room_capacity = $_POST['capacity'];
$vacant = $_POST['capacity'];
$price = $_POST['price'];

echo $room_no,$floor,$room_type,$room_capacity,$vacant,$price;


$sql = "INSERT INTO room values (".$room_no.",".$floor.",'".$room_type."',".$room_capacity.",".$vacant.",".$price.")";
echo $sql;


if (mysqli_query($conn,$sql)) {
    echo "insertion successful";
    header("Location:index.php");
}
else {
    echo "insertion failed";
}
?>