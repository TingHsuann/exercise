<?php
 session_start();
    if(isset($_SESSION["register"])){
        if($_SESSION["register"]=="Yes"){
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
<html>
    <head>
    <meta name = "keywords" content= "">
    <!-- 搜尋時本網頁的關鍵字 -->
    <title>墾丁三日遊</title>
    <!-- icon 的使用-->
    <link rel="shortcut icon" href="\img\sun_icon.png" type="image/x-icon">
    <!-- <body bgcolor='#e6e6fa'> -->
    
        <style>
        h1{
            font-size :50px;
            text-align:center;
        }
        table {
             border: 3px dotted #000;        
        }
        th, td {
            border: 1px solid #000;
            padding: 5px;
            text-align:center;
            vertical-align:middle;
        }
        .picture{
            width: 912px;
            margin: auot;
            display: flex;
        }
        .item{
            width: 300px;
            margin: 10px;
            border: 1px solid #aaa;
            padding: 10px;
        }
        .item img{
            width: 100%;
        }
        </style>
    </head>
    
        <a href="#top"></a>
       
        <h1>墾丁三日遊</h1>
        <div class="picture">
            <div class="item">
                <a href="https://reurl.cc/zMR8ma"target="_blank"><img src="\img\1.jpg"width="300" height="200"></a>
                <h2>龍坑</h2>
                <p>龍坑地區位於鵝鑾鼻東方約1.5公里，浦頂、坑頂村落東南面，是東海岸最接近南邊的一段。龍坑地區為隆起的珊瑚礁地形，由於地處鵝鑾鼻夾角的端點，冬季海浪拍打著礁岸，旺盛的侵蝕作用，造就了龍坑全區的崩崖、裙礁、峽谷等獨特的地形，由於形狀像條龍，龍坑因而得名，二一五種珊瑚礁海岸植物滋養其間，並有種類繁多的鳥類和爬蟲類等，不論是珊瑚礁地形或是動植物生態都深具研究的價值，所以被列為生態保護區。</p>
            </div>
            <div class="item">
                <a href="https://reurl.cc/44eRkL"target="_blank"><img src="\img\2.jpg"width="300" height="200"></a>
                <h2>鵝鑾鼻</h2>
                <p>鵝鑾鼻燈塔高21.4公尺，內設大型四等旋轉透鏡電燈，光度達180萬燭光，每30秒旋轉一周，見距20海浬，是國內光力最強的燈塔，有『東亞之光』的美譽。目前劃為墾丁國家公園的史蹟保存區。日治時期，經票選為「台灣八景」並豎立『台灣八景鵝鑾鼻碑』。</p>
            </div>
           
        </div>
        
        <hr>
        <h2>表單填寫</h2>
        <form action="rinfo.php" method="post" enctype="multipart/form-data">
            姓名: <input type="text" name="uname" placeholder="輸入您的名字" required="required"><br>
            信箱: <input type="email" name="uemail"> <br>
            電話: <input type="text" name="utel" placeholder="輸入您的聯絡電話" required="required"><br>
            
            性別:
            <input type="radio" name="usexual" value="女性"checked> 女性
            <input type="radio" name="usexual" value="男性"> 男性
            <input type="radio" name="usexual" value="中性"> 中性
            <br>
            飲食: ( 可選擇一個以上):
            <input type="checkbox"name="food[]"value="葷食"checked>葷食
            <input type="checkbox"name="food[]"value="素食">素食
            <input type="checkbox"name="food[]"value="海鮮">海鮮
            <br>
            <!-- check box 需要用陣列存 -->
            身分證字號: <input type="password" name="uid"> <br>
            
            <!-- Please input your time: <input type="time" name="time"> <br> -->
            
            T-shirt 尺寸:
            <select name="size" multiple>
                <option >XS</option>
                <option >S</option>
                <option >M</option>
                <option >XL</option>
                <option >XXL</option>
                <option >3XL</option>
            </select>
            <br>

            T-shirt 顏色: <input type="color" name="color"> <br>
            生日: <input type="date" name="ubirth"><br>
            建議: <textarea rows="10" cols="50" name="comment"placeholder="輸入欄位中的預設文字內容"></textarea><br> 
            檔案: <input type="file" name="file"><br> 
            <br><input type="submit"> 
        </form>
        <hr>

        <div >
            <table>
            <caption ><b>T-shirt 尺寸對照表</b></caption>
            <tr>
                <th></th>
                <th>XS</th>
                <th>S</th>
                <th>M</th>
                <th>L</th>
                <th>XL</th>
                <th>XXL</th>
                <th>3XL</th>
            </tr>
            <tr>            
                <th>身長</th>
                <td>55.5</td>
                <td>57</td>
                <td>59</td>
                <td>61.5</td>
                <td>63.5</td>
                <td>63.5</td>
                <td>65.5</td>
            </tr>
            <tr>            
                <th>肩寬</th>
                <td>31.5</td>
                <td>32.5</td>
                <td>33.5</td>
                <td>35</td>
                <td>36.5</td>
                <td>37.5</td>
                <td>38.5</td>
            </tr>
            <tr>            
                <th>胸寬</th>
                <td>31</td>
                <td>37</td>
                <td>38</td>
                <td>39</td>
                <td>42</td>
                <td>45</td>
                <td>48</td>
            </tr>
            </table>
        </div>
    </body>
</html>  