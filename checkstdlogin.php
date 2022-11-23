<?php
require_once 'DBconnect.php';

$user = $_POST['username'];
$passwd = $_POST['passwd'];
session_start();
$_SESSION['reg_no'] = $user;





$sql = "SELECT PASSWD,admin FROM residence WHERE REG_NO = '".$user."'";
$res = mysqli_query($conn,$sql);
if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_array($res)){
        if ($passwd == $row['PASSWD']) {
            if ($row['admin'] == '0') {
                echo "login successful";
                header("Location:home/index.php");
            }
            else {
                ?><script>
                window.alert("This is not a suitable place for you....");
                window.location.href = "stdlogin.php";
            </script><?php
            }
            
        }
        else{
            ?><script>
                window.alert("wrong password");
                window.location.href = "stdlogin.php";
            </script><?php
        }
    }
}
else {
    ?><script>
                window.alert("user not found");
                window.location.href = "stdlogin.php";
            </script><?php
}


?>