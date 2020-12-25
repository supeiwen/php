<?php
error_reporting(0);
session_start();
if(!isset($_SESSION[id])){ //ISSET判斷變數，從使用者登入的帳密來與資料庫中的資料進行核對
    echo "請輸入帳號密碼";
    echo "<meta http-equiv='refresh' content='1;url=login.html'>";
}else{
    $conn=mysqli_connect("localhost","root","","mydb2");
    $sql="insert into bulletin(title , content , type , time) values('{$_POST[title]}','{$_POST[content]}',{$_POST[type]},'{$_POST[time]}')";
    //echo $sql
    if(!mysqli_query($conn,$sql))
        echo"新增佈告錯誤";
    else
        echo"新增佈告成功";


    echo "<meta http-equiv='refresh' content='1;url=bulletin.php'>";
}

?>