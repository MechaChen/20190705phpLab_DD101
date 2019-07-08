<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>session</title>
</head>
<body>
<?php

//自session中取回登入者資料
echo "帳號 : ", $_SESSION["memId"] ,"<br>";
echo "姓名 : ", $_SESSION["memName"] ,"<br>";  
echo "email : ", $_SESSION["email"] ,"<br>";
?> 
</body>
</html>