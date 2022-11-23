<?php
require_once 'DBconnect.php';

$user = $_POST['username'];
$passwd = $_POST['passwd'];

$sql = "SELECT PASSWD,admin FROM residence WHERE REG_NO = '".$user."'";
$res = mysqli_query($conn,$sql);
if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_array($res)){
        if ($passwd == $row['PASSWD']) {
            if ($row['admin'] == '1') {
                echo "login successful";
                header("Location:admin/index.php");
            }
            else {
                ?><script>
                window.alert("you are not worthey....");
                window.location.href = "admlogin.php";
            </script><?php
            }
            
        }
        else{
            ?><script>
                window.alert("wrong password...");
                window.location.href = "admlogin.php";
            </script><?php
        }
    }
}
else {
    ?><script>
                window.alert("user not found...");
                window.location.href = "admlogin.php";
            </script><?php
}