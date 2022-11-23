<?php
include "include/head.php";
require_once "include/DBconnect.php";
?>
<div class="container">
    <legend>Payment details: </legend>
            <table class="table table-hover">
                <tr>
                    <th>Seriel No</th>
                    <th>Reg No</th>
                    <th>Name</th>
                    <th>Room</th>
                    <th>Total Amount</th>
                    <th>Paid Amount</th>
                    <th>Due Amount</th>
                </tr>
                <?php
               // $sql = "SELECT b.ROOM_NO, r.REG_NO, r.F_NAME, r.L_NAME FROM booking b,residence r WHERE b.REG_NO = r.REG_NO";
                $sql = "SELECT b.REG_NO,r.F_NAME,r.L_NAME,b.ROOM_NO,b.TOTAL_AMT,b.PAID_AMT,b.DUE_AMT  FROM residence r,pay_details b WHERE b.REG_NO = r.REG_NO";
                $res = mysqli_query($conn, $sql);
                if (mysqli_num_rows($res) > 0) {
                    $i = 0;
                    while ($row = mysqli_fetch_array($res)) {
                        $i++;
                        ?>    
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $row['REG_NO']; ?></td>
                            <td><?php echo $row['F_NAME']." ".$row['L_NAME']; ?></td>
                            <td><?php echo $row['ROOM_NO']; ?></td>
                            <td><?php echo $row['DUE_AMT']; ?></td>
                            <td><?php echo $row['PAID_AMT']; ?></td>
                            <td><?php echo $row['TOTAL_AMT']; ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>
    </table>
</div>