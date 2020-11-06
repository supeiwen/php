<?php 
    if (($_GET[id] == "john") && ($_GET[pwd]=="john1234"))//if條件句,如果帳號符合john及密碼符合john123,條件成立就會回傳Welcome,如果中間輸入有誤,就會回傳fall login
    
        echo "Welcome";
    else
        echo "fail login";
?>