<?php
include "include/head.php";
require_once "include/DBconnect.php";

$sql1 = "SELECT  COUNT(REG_NO) FROM residence";
$res1 = mysqli_query($conn, $sql1);
if (mysqli_num_rows($res1) > 0) {
    while ($row = mysqli_fetch_array($res1)){
        $res_count = $row[0];
    }
}


$sql = "SELECT  COUNT(ROOM_NO), SUM(ROOM_CAPACITY), SUM(VACANT) FROM room";
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_array($res)){
        ?>
<style>
    .card {
        box-shadow: 5px 2px 10px 5px grey;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="fa fa-users"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Residence</p>
                      <br>
                      <p class="card-title">
                        <?php echo $res_count; ?>
                      </p><p>
                    </p></div>
                    <br>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="fa fa-key"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Rooms</p>
                      <br>
                      <p class="card-title"><?php echo $row[0]; ?></p><p>
                    </p></div>
                    <br>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="fa fa-database"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Total Capacity</p>
                      <br>
                      <p class="card-title"><?php echo $row[1]; ?></p><p>
                    </p></div>
                    <br>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="fa fa-battery-half"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Vacancy</p>
                      <br>
                      <p class="card-title"><?php echo $row[2]; ?></p><p>
                    </p></div>
                    <br>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
    <?php
    }
}
    ?>
    <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
            <legend><h4>Not back yet...</h4></legend>
            <table class="table table-hover">
                <tr>
                    <th>Reg_no</th>
                    <th>Name</th>
                    <th>Out time</th>
                </tr>
                <?php
                $sql = "SELECT s.REG_NO,r.F_NAME,r.L_NAME,s.OUT_TIME_AND_DATE FROM residence r,student_log s WHERE s.REG_NO = r.REG_NO AND IN_TIME_AND_DATE IS NULL";
                $res = mysqli_query($conn, $sql);
                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_array($res)){
                        ?>
                        <tr>
                            <td><?php echo $row['REG_NO']; ?></td>
                            <td><?php echo $row['F_NAME']." ".$row['L_NAME']; ?></td>
                            <td><?php echo $row['OUT_TIME_AND_DATE']; ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>
        </div>
        <div class="col-md-7">
        <legend><h4>Not paid yet...</h4></legend>
            <table class="table table-hover">
                <tr>
                    <th>Reg_no</th>
                    <th>Name</th>
                    <th>Due Amount</th>
                    <th>Paid Amount</th>
                    <th>Pay</th>
                </tr>
                <?php
                $sql = "SELECT s.REG_NO,r.F_NAME,r.L_NAME,s.DUE_AMT FROM residence r,pay_details s WHERE s.REG_NO = r.REG_NO AND s.DUE_AMT > 0";
                $res = mysqli_query($conn, $sql);
                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_array($res)){
                        ?>
                        <tr>
                            <td><?php echo $row['REG_NO']; ?></td>
                            <td><?php echo $row['F_NAME']." ".$row['L_NAME']; ?></td>
                            <td><?php echo $row['DUE_AMT']; ?></td>
                            <form action="pay_due_amt.php" method="post">
                            <td><input type="number" class="form-control" name="amt" required><input type="hidden" name="reg_no" value="<?php echo $row['REG_NO']; ?>"></td>
                            <td><input type="submit" class="btn btn-success" value="PAY"></form></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>
        </div>
        </div>
        </div>

 