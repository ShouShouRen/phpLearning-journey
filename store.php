<?php
    require_once("conn.php");
    // $name = $_POST["name"];
    // $mail = $_POST["mail"];
    // $phone = $_POST["phone"];
    // $gender = $_POST["gender"];
    // $edu = $_POST["edu"];
    // $interest = implode(",",$_POST["interest"]);//因取的值是多筆所以需使用implode將陣列拆開
    // $content = $_POST["content"];
    extract($_POST);
    //因接收後過來的值預設都為關聯陣列可使用extract將關聯陣列分別存為為變數
    $interest = implode(',',$interest);
    

    $sql = "INSERT INTO `students`(name,mail,phone,gender,edu,interest,content)
    VALUES('$name','$mail','$phone','$gender','$edu','$interest','$content')";

    mysqli_query($conn,$sql);
    header("Location:index.php");
?>