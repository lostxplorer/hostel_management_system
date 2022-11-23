<?php
include "include/head.php";
require_once "include/DBconnect.php";

session_start();
$reg_no = $_SESSION['reg_no'];

$sql = "SELECT * FROM student_log WHERE REG_NO = '".$reg_no."'";

$res = mysqli_query($conn, $sql);
?>
<div class="container">
    <legend><u>Log history of <b><?php echo $reg_no; ?></b></u></legend>
            <table class="table table-hover">
                <tr>
                    <th>Seriel No</th>
                    <th>Out time</th>
                    <th>In time</th>
                    <th>Reasons</th>
                </tr>
<?php

if (mysqli_num_rows($res) > 0) {
    $i = 0;
    while ($row = mysqli_fetch_array($res)) {
        $i++;
        ?>    
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['OUT_TIME_AND_DATE']; ?></td>
            <td><?php echo $row['IN_TIME_AND_DATE']; ?></td>
            <td><?php echo $row['REMARKS']; ?></td>
        </tr>
        <?php
    }
}
?>
    </table>
</div>
<script>
    document.getElementById('acc').innerHTML = "<?php echo $reg_no; ?>";
</script>