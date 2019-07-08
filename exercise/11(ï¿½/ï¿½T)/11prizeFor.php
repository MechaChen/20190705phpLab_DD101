<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


<?php
$total=0;
for($i=1;$i<=10;$i++){  //總共10次
		echo rand(0,10),"<br>"; //11個球
	$total=$total+$i*100;
}

	echo "<br>",$total*100;
?>



</body>
</html>