<?php
include "include/head.php";
require_once "include/DBconnect.php";
session_start();
$room_no = $_GET['room_no'];
$price = $_GET['price'];
$_SESSION['room_no'] = $room_no;
$_SESSION['price'] = $price;
?>

<div class="container">
    <form action="book_room1.php" method="post">
        <legend><h2>Book room</h2></legend>
        <h3>Assign residence for the room number  <?php echo $room_no; ?> Which costs  <?php echo $price; ?> Rs</h3>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6">
                <label for="reg_no">Reg No</label>
                <input type="text" name = "reg_no" id="reg_no" class = "form-control">
            </div>
            <div class="col-md-6">
                <label for="payment">Amount:</label>
                <input type="number" name = "payment" id = "payment" class = "form-control">
            </div>
        </div>
        <br>
        <br>
        <input type="submit" class="btn btn-success" value = "Payment"> 
    </form>
</div>
<?php
?>