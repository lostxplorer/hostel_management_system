<?php
require_once "include/DBconnect.php";


$reg_no = $_POST['reg_no'];
$f_name = $_POST['f_name'];
$m_init = $_POST['m_init'];
$l_name = $_POST['l_name'];
$phone_no = $_POST['phone_no'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$course = $_POST['course'];
$year = $_POST['year'];
$doj = $_POST['doj'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$cnf_passwd = $_POST['password-cnf'];

if ($password != $cnf_passwd) {
    echo 'wrong password';
}

$sql = "UPDATE residence SET F_NAME = '".$f_name."',L_NAME = '".$l_name."',M_INIT = '".$m_init."',DOB = '".$dob."',COURSE = '".$course."',YEAR = '".$year."',EMAIL = '".$email."',PHONE_NO = '".$phone_no."',ADDRESS = '".$address."',PASSWD = '".$password."',DATE_OF_JOIN = '".$doj."',GENDER = '".$gender."' WHERE REG_NO = ".$reg_no.";";

if (mysqli_query($conn,$sql)) {
    echo "insertion successful";
    header("Location:index.php");
}
else {
    echo "insertion failed";
}