<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","mydb2");
$sql="delete from bulletin where bid={$_GET[bid]}"; //where傳回符合條件的紀錄值
if(!mysqli_query($conn,$sql)){   //如果查不到，就會刪除失敗

echo"刪除錯誤";
}
else{
echo"刪除成功 ;回前頁中.....";   //如果查到資料庫中的資料，就會顯示刪除成功並回到布告欄頁面
echo"<meta http-equiv='refresh' content='3; url=bulletin.php'>";

}

?>