<?php
    session_start();
    if(isset($_SESSION['login'])){
        if($_SESSION['login']=="Yes"){
            echo "<a href='/Log_out.php' style='text-decoration:none'>登出系統</a>";
        }else{
            echo "非法進入系統";
            exit();
        }        
    }else{
            echo "非法進入系統";
            exit();
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
    <title>註冊</title>
</head>

<body>
    <div class="wrap">
        <form method="post" enctype="multipart/form-data" class="pure-form" id='form' name='form' >

            <h1>註冊</h1>

            
            <label for="person">姓名：</label>
            <input type="text" name="uname" placeholder="請輸入姓名">

            <label for="person">身分證字號 : </label>
            <input type="password" name="uid" placeholder="請輸入身分證字號">
            <br>

            <label for="mail">信箱：</label>
            <input type="email" name="uemail" placeholder="請輸入電子郵件地址">
            <br>
            
            
            <label for="person">電話:</label>
            <input type="text"  name="utel" placeholder="請輸入電話">

            <button class="pure-button pure-button-primary" type="submit" onclick="log()">送出</button>
        </form>

        <?php
        if(isset($_POST["uname"])){//isset() 函数用于檢測變量是否已設置並且非 NULL。
            if($_POST["uname"]!=null){
                $_SESSION["register"]="Yes";
                header('Location:sign_up.php');
                
            }else{

            }
        }
        ?> 
    </div>
