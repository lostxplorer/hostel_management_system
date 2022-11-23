<?php
require_once 'include/DBconnect.php';
$reg_no = $_GET['reg_no'];

$sql = "DELETE FROM residence WHERE REG_NO = ".$reg_no.";";


$sql0 = "SELECT ROOM_NO FROM booking WHERE REG_NO = ".$reg_no.";";
$res = mysqli_query($conn,$sql0);
if (mysqli_num_rows($res)>0) {
    while ($row = mysqli_fetch_array($res))
    $room_no = $row['ROOM_NO'];
}

$sql1 = "UPDATE room SET VACANT = VACANT + 1 WHERE ROOM_NO = ".$room_no.";";
echo $sql1;
if (mysqli_query($conn,$sql1)) {
    echo "insertion successful";
}
else {
    echo "insertion failed";
}



echo $sql;
if (mysqli_query($conn,$sql)) {
    echo "insertion successful";
    header("Location:list_res.php");
}
else {
    echo "insertion failed";
}
?>