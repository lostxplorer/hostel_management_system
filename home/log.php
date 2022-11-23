<?php
include "include/head.php";
require_once "include/DBconnect.php";

session_start();
$reg_no = $_SESSION['reg_no'];
$room_no = $_SESSION['room_no'];

$sql = "SELECT IN_TIME_AND_DATE,SL_NO FROM STUDENT_LOG WHERE REG_NO = '".$reg_no."' ORDER BY SL_NO DESC";
$res = mysqli_query($conn,$sql);
if (mysqli_num_rows($res) > 0) {
    if ($row = mysqli_fetch_array($res)){
        if ($row['IN_TIME_AND_DATE'] == "") {
            $_SESSION['sl_no'] = $row['SL_NO'];
            ?>
            <div class="container">
                <form action="login.php" method="post" class = "form-group">
                    <legend><h2>STUDENT LOG-IN ENTRY</h2></legend>
                    <br>
                    <br>
                    <input type="submit" value="I'm back" class = "btn btn-primary">
                </form>
            </div>
            <?php
        }
        else {
            ?>
            <div class="container">
                <form action="logout.php" method="post" class = "form-group">
                    <legend><h2>STUDENT LOG-OUT ENTRY</h2></legend>
                    <label for="remarks">Reason: </label>
                    <input type="textbox" class="form-control" name = "remarks" style="width: 60%; height: 200px; ">
                    <br>
                    <br>
                    <input type="submit" value="I'll be back" class = "btn btn-primary">
                </form>
            </div>
            <?php
        }
    }
}
else {
    ?>
    <div class="container">
        <form action="logout.php" method="post" class = "form-group">
            <legend><h2>STUDENT LOG-OUT ENTRY</h2></legend>
            <label for="remarks">Reason: </label>
            <input type="textbox" class="form-control" name = "remarks" style="width: 60%; height: 200px; ">
            <br>
            <br>
            <input type="submit" value="I'll be back" class = "btn btn-primary">
        </form>
    </div>
    <?php
}
?>
<script>
    document.getElementById('acc').innerHTML = "<?php echo $reg_no; ?>";
</script>