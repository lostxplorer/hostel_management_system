<?php
require_once 'include/DBconnect.php';

session_start();

$reg_no = $_SESSION['reg_no'];
$room_no = $_SESSION['room_no'];
$remarks = $_POST['remarks'];

$sql = "INSERT INTO student_log (REG_NO,ROOM_NO,REMARKS) VALUES ('".$reg_no."',".$room_no.",'".$remarks."')";

if (mysqli_query($conn,$sql)) {
    echo "successfull";
    header("Location:index.php");
}
?>
<script>
    document.getElementById('acc').innerHTML = "<?php echo $reg_no; ?>";
</script>