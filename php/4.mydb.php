<?php
    error_reporting(0);
    
    $conn = mysqli_connect("localhost","root","", "mydb");//如果找不到mydb資料夾就會出現錯誤
    if (mysqli_connect_error($conn))
        die("資料庫連線錯誤");

    mysqli_set_charset($conn, "utf8");
    $result=mysqli_query($conn, "select * from user");//檢查資料夾是否建立完成,程式會不斷的重複尋找直到成功,就會顯示出密碼和帳號
    while ($row=mysqli_fetch_array($result)) {
        echo $row[id];
        echo " ";
        echo $row[pwd];
        echo "<br>";
    }
?>