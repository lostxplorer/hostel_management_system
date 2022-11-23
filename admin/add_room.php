<?php
include "include/head.php";
require_once "include/DBconnect.php";
?>

<div class="form-group container">
    <form action="add_room1.php" method="post">
        <legend><h2>Add Rooms</h2></legend>
        <div class="row">
            <div class="col-md-6">
            <label for="room_no">Room No: </label>
            <input type="number" class="form-control" name = "room_no">
            </div>
            <div class="col-md-6">
            <label for="room_type">Room Type: </label>
            <select name="room_type" class="form-control"> 
            <option value="">Select Type</option>
            <option value="Attached">Attached</option>
            <option value="Non-Attached">Non-Attached</option>
            </select>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-4">
            <label for="capacity">Room Capacity: </label>
            <input type="number" class="form-control" name = "capacity">
            </div>
            <div class="col-md-4">
            <label for="floor">Floor: </label>
            <input type="number" class="form-control" name = "floor">
            </div>
            <div class="col-md-4">
            <label for="price">Price: </label>
            <input type="number" class="form-control" name = "price">
            </div>
        </div>
        <br>
        <br>
        <input type="submit" name="submit" Value="Register" class="btn btn-primary">
    </form>
</div>