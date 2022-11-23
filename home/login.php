<?php
require_once 'include/DBconnect.php';

session_start();


$reg_no = $_SESSION['reg_no'];
$room_no = $_SESSION['room_no'];
$sl_no = $_SESSION['sl_no'];


$sql = "UPDATE student_log SET IN_TIME_AND_DATE = NOW() WHERE SL_NO = ".$sl_no.";";


if (mysqli_query($conn,$sql)) {
    echo "successfull";
    header("Location:index.php");
}
?>
<script>
    document.getElementById('acc').innerHTML = "<?php echo $reg_no; ?>";
</script>