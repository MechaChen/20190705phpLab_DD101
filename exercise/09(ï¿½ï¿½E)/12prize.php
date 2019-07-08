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
$i=1;
do{
	$tmp=rand(0,10)*100;
	echo "第 $i 次為 $tmp <br>";
	$total=$total +$tmp;
	$i++;
}while($tmp!=0);
	echo "摸 $i 次，總共 $total 元";


 ?>


	
</body>
</html>