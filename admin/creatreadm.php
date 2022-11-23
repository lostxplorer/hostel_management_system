<?php
include "include/head.php";
require_once "include/DBconnect.php";
?>

<div class="form-group container">
    <form action="add_rec1.php" method="post">
        <legend style="padding-left: -10px; "><h2>Add Resnameece</h2></legend>
        <div class="row">
            <div class="col-md-4">
            <label for="f_name">First name: </label>
            <input type="text" class="form-control" name = "f_name">
            </div>
            <div class="col-md-4">
            <label for="m_init">Initial: </label>
            <input type="text" class="form-control" name = "m_init">
            </div>
            <div class="col-md-4">
            <label for="l_name">Last name: </label>
            <input type="text" class="form-control" name = "l_name">
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-4">
            <label for="phone_no">Phone NO: </label>
            <input type="number" class="form-control" name = "phone_no">
            </div>
            <div class="col-md-4">
            <label for="email">Email: </label>
            <input type="email" class="form-control" name = "email">
            </div>
            <div class="col-md-4">
            <label for="dob">Date Of Birth: </label>
            <input type="date" class="form-control" name = "dob">
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-4">
            <label for="course">Course: </label>
            <select name="course" name="course" class="form-control" > 
            <option value="">Select Course</option>
            <option value="COMPUTER SCIENCE ENGGINEERING">COMPUTER SCIENCE ENGGINEERING&nbsp;&nbsp;(CSE)</option>
            <option value="CIVIL ENGGINEERING">CIVIL ENGGINEERING&nbsp;&nbsp;(CVE)</option>
            <option value="MECHANICAL ENGGINEERING">MECHANICAL ENGGINEERING&nbsp;&nbsp;(MECH)</option>
            <option value="BSC NURSING">BSC NURSING&nbsp;&nbsp;(BSN)</option>
            <option value="ELECTRONIS ENGGINEERING">ELECTRONIS ENGGINEERING&nbsp;&nbsp;(EE)</option>
            <option value="MASTER OF BUSINESS ADMINSTRATION">MASTER OF BUSINESS ADMINSTRATION&nbsp;&nbsp;(MBA)</option>
            </select>
            </div>
            <div class="col-md-4">
            <label for="year">Year: </label>
            <select name="year" id="year" class="form-control" > 
            <option value="">Select Year</option>
            <option value="first">First year</option>
            <option value="second">Second year</option>
            <option value="third">Third year</option>
            <option value="fourth">Fourth year</option>
            </select>
            </div>
            <div class="col-md-4">
            <label for="doj">Date Of Joining: </label>
            <input type="date" class="form-control" name = "doj">
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-8">
            <label for="address">Address: </label>
            <input type="textbox" class="form-control" name = "address">
            </div>
            <div class="col-md-4">
            <label for="gender">Gender </label><br>
            <input type="radio" class = "form-check-input" name = "gender" name = "gender" value="male">Male</input><br>
            <input type="radio" class = "form-check-input" name = "gender" name = "gender" value="female">Female</input>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6">
            <label for="reg_no">Reg No: </label>
            <input type="textbox" class="form-control" name = "reg_no">
            </div>
            <div class="col-md-6">
            <label for="password">Password: </label>
            <input type="password" class="form-control" name = "password">
            </div>
        </div>
        <br>
        <br>
        <input type="submit" name="submit" Value="Register" class="btn btn-primary">
    </form>
</div>