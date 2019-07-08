<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
<style type="text/css">
h2 {
	color:deeppink;
}	
</style>
</head>
<body>
	OK~
<?php
echo "帳號 : ", $_REQUEST["memId"], "<br>";  
echo "密語 : ", $_REQUEST["memPsw"], "<br><br>";  

echo "<hr>備註 : <br>", $_REQUEST["note"], "<br>";
echo "<hr>備註 : nl2br()<br>", nl2br($_REQUEST["note"]), "<br>";
?>      
</body>
</html>