<?php
session_start();
require_once 'include/DBconnect.php';

$pay_amt = $_POST['amt'];
$reg_no = $_POST['reg_no'];

echo $pay_amt,$reg_no;


$sql = "SELECT * FROM pay_details;";

$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_array($res)) {
        $paid_amt = $row['PAID_AMT'];
        $total_amt = $row['TOTAL_AMT'];
        
    }
}
$paid_amt = $paid_amt + $pay_amt;
$due_amt = $total_amt - $paid_amt;

$status = "";
if ($paid_amt == 0) {
    $status = "Not paid.";
}
elseif ($paid_amt > 0 && $paid_amt < $total_amt) {
    $status = "Partially paid.";
}
else{
    $status = "Fully paid.";
}


$sql1 = "UPDATE pay_details SET PAID_AMT=".$paid_amt.",DUE_AMT=".$due_amt." WHERE REG_NO='".$reg_no."';";

$sql2 = "UPDATE booking SET PAYMENT='".$status."' WHERE REG_NO = '".$reg_no."';";


if (mysqli_query($conn,$sql2)) {
    echo "insertion successful";
    if (mysqli_query($conn,$sql1)) {
        echo "insertion successful";
        header("Location:index.php");
    }
    else {
        echo "insertion failed";
    }
}
else {
    echo "insertion failed";
}
?>