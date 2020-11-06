<?php
    $conn = mysqli_connect("localhost", "root", "", "mydb"); #1.MYSQLI_CONNECT，必須要設定IP(比地端LOCALHOST)
    #帳號、密碼、以及連結的資料庫(MYDB)
    
    $result=mysqli_query($conn, "select * from user"); #2.mysqli_query從表和user找出資料

    $row=mysqli_fetch_array($result); #3.mysqli_fetch_array從$result擷取資料

    echo $row[id] + " " + $row[pwd];    //輸出ID 跟PWD
?>