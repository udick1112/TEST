  
<?php 
    if (($_GET[id] == "john") && ($_GET[pwd]=="john1234"))  //如果帳號密碼兩者都對 顯示 Welcome  錯誤 顯示 fail login
        echo "Welcome";
    else
        echo "fail login";
?>