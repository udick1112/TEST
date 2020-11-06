<?php
    error_reporting(0);
    
    $conn = mysqli_connect("localhost","root","", "mydb");  //連接資料庫  #1.MYSQLI_CONNECT，必須要設定IP(比地端LOCALHOST)
    #帳號、密碼、以及連結的資料庫(MYDB)
    
    if (mysqli_connect_error($conn)) //沒連結到 顯示 資料庫連線錯誤
        die("資料庫連線錯誤");

    mysqli_set_charset($conn, "utf8");  //使用UTF8編碼
    $result=mysqli_query($conn, "select * from user");  #2.mysqli_query從表和user找出資料
    while ($row=mysqli_fetch_array($result)) {  #3.mysqli_fetch_array從$result擷取每筆資料 迴圈
        echo $row[id];  
        echo " ";
        echo $row[pwd];
        echo "<br>";
    }
?>