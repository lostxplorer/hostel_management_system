<?php
include "include/head.php";
require_once "include/DBconnect.php";



$sql = "SELECT * FROM student_log; ";

$res = mysqli_query($conn, $sql);
?>
<div class="container">
    <legend><u>Log history</u></legend>
            <table class="table table-hover">
                <tr>
                    <th>Seriel No</th>
                    <th>Reg No</th>
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
            <td><?php echo $row['REG_NO']; ?></th>
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