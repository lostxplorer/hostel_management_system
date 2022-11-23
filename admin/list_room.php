<?php
include "include/head.php";
require_once "include/DBconnect.php";

$sql = "CALL `stored_procedure`()";
$i = 0;    
?>


<div class="container">
    <legend>Rooms Available</legend>
            <table class="table table-hover">
                <tr>
                    <th>Seriel No</th>
                    <th>Room No</th>
                    <th>Floor</th>
                    <th>Room Type</th>
                    <th>vacancy</th>
                    <th>Price</th>
                    <th>Book</th>
                </tr>

<?php
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
    while ($row = mysqli_fetch_array($result)){
        $i++;
        ?>
        <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['ROOM_NO']; ?></td>
        <td><?php echo $row['FLOOR']; ?></td>
        <td><?php echo $row['ROOM_TYPE']; ?></td>
        <td><?php echo $row['VACANT'];?></td>
        <td><?php echo $row['PRICE']; ?></td>
        <td><a href="<?php echo "book_room.php?room_no=".$row['ROOM_NO']."&price=".$row['PRICE']."" ?>" class="btn btn-primary">BOOK</a></td>
        </tr>

<?php

    }
}
?>