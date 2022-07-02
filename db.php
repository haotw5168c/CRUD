<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "newpassword";
    $db_name = "my_db";
    
    $db_link = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if($db_link) {
        mysqli_query($db_link, "SET NAMES 'utf8'");
    } else {
        exit("資料庫連接失敗，" . mysqli_connect_error() . "。");
    }
?>