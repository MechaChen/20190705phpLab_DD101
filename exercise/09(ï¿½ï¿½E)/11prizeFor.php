<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php 
$total=0;
$tmp=0;
for($i=1;$i<=10;$i++){
	$tmp=rand (0,10);
	echo $tmp,"<br>";
	$total=$total+$tmp;

	
}
	echo $total*100,"元";


 ?>




	
</body>
</html>