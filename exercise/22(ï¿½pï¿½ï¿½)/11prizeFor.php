<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>11prizeFor</title>
</head>
<body>
	<?php 
	// rand(min, max)
	$total = 0;
	for ($i=1; $i<=10 ; $i++) { 
		$r = (rand(0,10))*100;
		echo "第 $i 次的彩金面額為: $r <br>";
		$total += $r;
	}
	echo "彩金的總金額為: $total";
	 ?>


</body>
</html>