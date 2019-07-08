<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>12prize</title>
</head>
<body>
	<?php 
	$total = 0;
	$i=1;
	do{
		$r = (rand(0, 10))*100;
		echo "第 $i 次摸彩, 且金額為 $r, ";
		$total += $r;
		echo "目前累計金額: $total <br>";
		$i++;
	}while ($r != 0);
	echo "最後總計金額為 $total";
	 ?>
	
</body>
</html>