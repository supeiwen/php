<?php

    error_reporting(0);
    session_start(); //有始有終的系列動作/消息
    if(!isset($_SESSION["counter"])){ //isset檢查變數是否存在
        $_SESSION["counter"]=1;}
    else{
        $_SESSION["counter"]++;
    }
    echo "登入{$_SESSION["counter"]}人次";



?>