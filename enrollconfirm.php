<?php
require("dbconnect.php");

$uName = $_POST["uName"];
$uPwd = $_POST["uPwd"];
$role = $_POST["role"];

echo $uName.$uPwd.$role;

$SQL = "INSERT INTO user (uName, uPwd,uRole) VALUES ('$uName','$uPwd','$role')";
if(mysqli_query($link,$SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('註冊成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=Log_in.php'>";
}else{
    echo "<script type='text/javascript'>";
    echo "alert('註冊失敗')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=enroll.php'>";
}
?>