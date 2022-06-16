<?php
    require("dbconnect.php");
    $uNo=$_GET["uNo"];
    $SQL="SELECT * FROM user WHERE uNo='$uNo'";
    if($result=mysqli_query($link,$SQL)){//从结果集中取得一行作为关联数组：
        while($row=mysqli_fetch_assoc($result)){
            $uName = $row['uName'];
            $uPwd = $row['uPwd'];
            $uRole = $row['uRole'];
        }
    }
?>

<h1>使用者更新</h1>
<form action="updateconfirm.php" method="post">
User Numebr: <?php echo $uNo;?></br>
<input type="hidden" name="uNo" vale='<?php echo $uNo;?>'>
Please input userName: <input type="text" name="uName" value='<?php echo $uName;?>'></br>
Please input password: <input type="text" name="uPwd" value='<?php echo $uPwd;?>'></br>

<!-- radio box 無法update 值 -->
<?php
if($uRole=='user'){
    echo "Please select role : User <input type='radio' name='role' value='user' checked></br> Admin <input type='radio' name='role' value='admin'></br>";
}else{
    echo "Please select role : User <input type='radio' name='role' value='user' ></br> Admin <input type='radio' name='role' value='admin' checked></br>";
}
?>

<input type="submit" value="更新"></br>

</form>