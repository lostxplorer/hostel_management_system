<?php
include "include/head.php";
require_once "include/DBconnect.php";
?>
<div class="container">
    <legend>Residence list</legend>
            <table class="table table-hover">
                <tr>
                    <th>Seriel No</th>
                    <th>Reg No</th>
                    <th>Name</th>
                    <th>Room</th>
                    <th>Modify</th>
                    <th>Delete</th>
                    <th>Cancel room</th>
                </tr>
                <?php
               // $sql = "SELECT b.ROOM_NO, r.REG_NO, r.F_NAME, r.L_NAME FROM booking b,residence r WHERE b.REG_NO = r.REG_NO";
                $sql = "SELECT booking.ROOM_NO, residence.REG_NO, residence.F_NAME, residence.L_NAME FROM booking RIGHT OUTER JOIN residence ON booking.REG_NO = residence.REG_NO";
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
                            <td><a href="<?php echo "modify_res.php?reg_no='".$row['REG_NO']."'"; ?>" class="btn btn-success">MODIFY</a></td>
                            <td><a href="<?php echo "del_res.php?reg_no='".$row['REG_NO']."'"; ?>" class="btn btn-danger">DELETE</a></td>
                            <td><a href="<?php echo "cancel_room.php?reg_no='".$row['REG_NO']."'"; ?>" class="btn btn-warning">CANCEL</a></td>
                        </tr>
                        <?php
                    }
                }
                ?>
    </table>
</div>