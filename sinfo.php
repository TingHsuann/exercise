<?php
    $uname=$_POST["uname"];
    $uemail=$_POST["uemail"];
    $utel=$_POST["utel"];
    $ubirth=$_POST["ubirth"];
    $uid=$_POST["uid"];
    $usexual=$_POST["usexual"];
    $food=$_POST["food"];
    $foodsize = count($food);
    $size = $_POST["size"];
    $comment = $_POST["comment"];
    $comment = strip_tags($comment);
    $comment = nl2br($comment);
    $file[] = $_FILES["file"];
    $color = $_POST["color"];
    // $foods = implode(",",$food);

    echo "<h1>墾丁資料報名表</h1>";
    echo "<b>你的姓名: </b>".$uname."先生/小姐</br>";
    echo "<b>你的信箱: </b>".$uemail."</br>";
    echo "<b>你的電話: </b>".$utel."</br>";
    echo "<b>你的生日: </b>".$ubirth."</br>";
    echo "<b>你的身分證字號: </b>".$uid."</br>";
    echo "<b>你的性別: </b>".$usexual."</br>";
    
    echo "<b>你的飲食偏好: </b>";
    for ($i=0;$i<$foodsize-1;$i++){
        echo $food[$i].",";
    }
    echo $food[$foodsize-1]."</br>";
    echo "<b>你的T-shirt尺寸:</b> ".$size."</br>";
    echo "<b>你的建議: </b>".$comment."</br>";
    echo "<b>你的檔案: </b>";
    echo $_FILES["file"]["name"]."</br>";
    echo $_FILES["file"]["tmp_name"]."</br>";
    echo $_FILES["file"]["size"]."</br>";
    echo $_FILES["file"]["type"]."</br>";
    copy($_FILES["file"]["tmp_name"],$_FILES["file"]["name"]);
    echo "<b>你的顏色: </b>".$color."</br>";

?>