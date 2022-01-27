<?php
    $db_host = "localhost";
    $db_user = "admin";
    $db_pw = "admin";
    $db_name = "lccnet";

    $conn = mysqli_connect($db_host,$db_user,$db_pw,$db_name)or die('連線錯誤');

    mysqli_query($conn,"SET NAMES UTF8MB4");//執行資料庫語法
?>