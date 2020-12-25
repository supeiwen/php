<?php
error_reporting(0);
session_start();
unset($_SESSION["id"]);//SESSION_unset($_SESSION["id"]);

echo"登出中.......";
echo"<meta http-equiv='refresh' content='2; url=login.html'>";

?>