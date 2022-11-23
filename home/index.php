<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    /*background: #67B26F;  
    background: -webkit-linear-gradient(to right, #4ca2cd, #67B26F);  
    background: linear-gradient(to right, #4ca2cd, #67B26F);*/
    margin: 0;
    font-family: 'Lato', sans-serif;
    color: #000;
}
    </style>
</head>
<body>

<?php 
include 'include/DBconnect.php';
include 'include/head.php';


session_start();
$reg_no = $_SESSION['reg_no'];

$sql = "SELECT ROOM_NO FROM BOOKING WHERE REG_NO = '".$reg_no."'";
$res = mysqli_query($conn,$sql);
if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_array($res)){
        $room_no = $row['ROOM_NO'];
    }
}
$_SESSION['room_no'] = $room_no;

$sql = "SELECT r.F_NAME,r.M_INIT,r.L_NAME,r.COURSE,r.YEAR,r.EMAIL,r.PHONE_NO,r.ADDRESS,m.ROOM_NO,m.ROOM_TYPE,m.FLOOR,p.TOTAL_AMT,p.PAID_AMT,p.DUE_AMT FROM residence r,room m,pay_details p WHERE p.ROOM_NO = m.ROOM_NO AND r.REG_NO = p.REG_NO AND r.REG_NO = '".$reg_no."';";

$res = mysqli_query($conn,$sql);
if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_array($res))
    {

?>
<div class="student-profile py-4">
    <div class="container bg-secondary">
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header bg-transparent text-center">
                    <img class="profile_img" src="assets/img/prof.png" alt="student dp">
                    <h3><?php echo $row['F_NAME']." ".$row['L_NAME']; ?></h3>
                    <div class="card-body">
                        <br>
                        <br>
                        <table class="table" style="width: 80%;">
                            <tr>
                                <td>Register No:</td>
                                <td><?php echo $reg_no; ?></td>
    </tr>
    <tr>
                                <td>Course:</td>
                                <td><?php echo $row['COURSE']; ?></td>
                            </tr>
                            <tr>
                                <td>Year:</td>
                                <td><?php echo $row['YEAR']; ?></td>
                            </tr>
                            <tr>
                                <td>Phone:</td>
                                <td><?php echo $row['PHONE_NO']; ?></td>
                            </tr>
                            <tr>
                                <td>Email: </td>
                                <td><?php echo $row['EMAIL']; ?></td>
                            </tr>
                        </table>
                        <br>
                        <br>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
            <div class="card shadow">
         <div class="card-header">
             <br>
             <h3 style = "margin-left: 10px;">General Information</h3>
             <br>
         </div>
         <div class="card-body">
             <table class="table" style="width: 93%;">
                 <tr>
                     <td>Room No:</td>
                     <td><?php echo $row['ROOM_NO']; ?></td>
                 </tr>
                 <tr>
                     <td>Room Type:</td>
                     <td><?php echo $row['ROOM_TYPE']; ?></td>
                 </tr>
                 <tr>
                     <td>FLOOR: </td>
                     <td><?php echo $row['FLOOR']; ?></td>
                 </tr>
                 <tr>
                     <td>TOTAL FEES:</td>
                     <td><?php echo $row['TOTAL_AMT']; ?></td>
                 </tr>
                 <tr>
                     <td>PAID FEES:</td>
                     <td><?php echo $row['PAID_AMT']; ?></td>
                 </tr>
                 <tr>
                     <td>FEES DUE:</td>
                     <td><?php echo$row['DUE_AMT']; ?></td>
                 </tr>
             </table>
         </div>
          <div style="height: 26px"></div>
      </div>
            </div>
        </div>
    </div>
</div>
           

<?php
    }
}
?>


<script>
    document.getElementById('acc').innerHTML = "<?php echo $reg_no; ?>";
</script>
        </body>