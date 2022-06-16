<?php
    //如果出現already sent
    //ob_start();
    session_start();
    $link = @mysqli_connect( 
        'localhost',  // MySQL主機名稱 
        'root',       // 使用者名稱 
        '',  // 密碼
        'php');
?>
<?php
    if(isset($_COOKIE["UID"])){
        $cookieID = $_COOKIE["UID"];
        echo "歡迎".$cookieID."再度光臨";
    }else{
        echo "恭喜您發現本網站!!";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <title>登入</title>
</head>

<body>
    <div class="wrap">
        <!-- 表單 -->
        <form  method="post" enctype="multipart/form-data" class="pure-form" id='form' name='form' >
            <!-- $_POST -->
            <h1>登入</h1>

            <label for="person">帳號：</label>
            <input type="text" name="uid" placeholder="請輸入帳號">
            <label for="person">密碼 : </label>
            <input type="password" name="upwd" placeholder="請輸入密碼">
            <br>

            <button class="pure-button pure-button-primary" type="submit" onclick="log()">Log in</button>
        </form>

        <?php
            // echo time();
            // date_default_timezone_set('Asia/Taipei');
            // echo date ("  m-d-Y H:i:s",time());
            // header("Refresh:1");

            if(isset($_POST["uid"])){//isset() 函数用于檢測變量是否已設置並且非 NULL。
                if($_POST["uid"]!=null){
                    $uid = $_POST["uid"];
                    $upwd = $_POST["upwd"];
                    //判斷帳號是否是使用者
                    $SQL="SELECT * FROM user WHERE uName='$uid' AND uPwd = '$upwd' AND uRole = 'user' ";
                    $result = mysqli_query($link, $SQL);
                    if (mysqli_num_rows($result)==1) {
                        $_SESSION["login"]="Yes";
                        setcookie("UID",$uid.time()+172800);
                        header('Location:register.php');
                    }else{
                        //判斷帳號是否是管理員
                        $SQL="SELECT * FROM user WHERE uName='$uid' AND uPwd = '$upwd' AND uRole = 'admin' ";
                        $result = mysqli_query($link, $SQL);
                        if (mysqli_num_rows($result)==1) {
                            $_SESSION["login"]="Yes";
                            setcookie("UID",$uid.time()+172800);
                            header('Location:list.php');
                        }else{
                            echo "帳號或密碼輸入失敗";
                        }
                        // header('Location:Log_in_Fail.php');
                    }
                }else{
                    echo "您未輸入帳號密碼";
                }
            }else{
                echo "歡迎登入，請輸入帳號密碼!";
            }
            //尚未註冊按鈕
            echo "<br><br>";
            echo("<input type=button value=\"尚未註冊，註冊去!\" onclick=\"location.href='enroll.php'\">");
            
            //如果出現already sent
            //ob_start();
        ?>
    </div>
