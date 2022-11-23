<?php
require_once 'include/DBconnect.php';

session_start();

$room_no = $_SESSION['room_no'];
$reg_no = $_POST['reg_no'];
$paid_amt = $_POST['payment'];
$total_amt = $_SESSION['price'];

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

$sql = "INSERT INTO booking (REG_NO,ROOM_NO,PAYMENT) VALUES ('".$reg_no."',".$room_no.",'".$status."');";
$sql1 = "INSERT INTO pay_details (REG_NO,ROOM_NO,TOTAL_AMT,PAID_AMT,DUE_AMT) VALUES ('".$reg_no."',".$room_no.",".$total_amt.",".$paid_amt.",".$due_amt.");";
echo $sql1;


if (mysqli_query($conn,$sql)) {
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