<?php
include 'include/head.php';
require_once 'include/DBconnect.php';

session_start();


$reg_no = $_POST['reg_no'];
$room_no = $_SESSION['room_no'];
echo $reg_no,$room_no;
?>

<div class="container">
    <form action="book_room1.php" method="post">
        <legend><h2>Pyament details</h2></legend>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6">
                
            </div>
        </div>
    </form>
</div>

