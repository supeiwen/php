<?php
    $conn = mysqli_connect("localhost", "root", "", "mydb");//新增伺服器資料庫,connect連結到資料庫裡面的mydb
    
    $result=mysqli_query($conn, "select * from user");//尋找user資料夾

    $row=mysqli_fetch_array($result);

    echo $row[id] . " " . $row[pwd]; //就會顯示出帳號和密碼
?>