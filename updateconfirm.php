<?php 
    require("dbconnect.php");   
    $uNo = $_POST["uNo"];
    $uName = $_POST["uName"];
    $uPwd = $_POST["uPwd"];
    $uRole = $_POST["role"];

    echo $uNo.$uName.$uPwd.$uRole;
    $SQL="UPDATE user SET uName='$uName' , uPwd='$uPwd' , uRole='$uRole' WHERE uNo='$uNo'";

    if(mysqli_query($link,$SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('更新成功')";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=list.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('更新失敗')";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=update.php'>";
    }
?>