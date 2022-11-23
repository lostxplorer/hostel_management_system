<?php
require_once 'include/DBconnect.php';
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
$reg_no = $_POST['reg_no'];
$password = $_POST['password'];

//echo $f_name, $m_init, $l_name, $phone_no, $email, $dob, $course, $year, $doj,$address, $gender, $reg_no, $password;

$sql = "INSERT INTO residence values ('".$f_name."','".$l_name."','".$m_init."','".$dob."','".$course."','".$year."','".$email."',".$phone_no.",'".$address."','".$reg_no."','".$password."','".$doj."','1','".$gender."');";
echo $sql;

if (mysqli_query($conn,$sql)) {
    echo "insertion successful";
    header("Location:index.php");
}
else {
    echo "insertion failed";
}