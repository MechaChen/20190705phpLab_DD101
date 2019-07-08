<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<h3>12- 摸彩金 : 有11顆彩球, 彩球面額為0-10之間, 若摸到的彩球不為0,則可繼續摸彩,若摸到的彩球為0,則停止摸彩,並計算其摸彩次數及彩金總金額(單位:佰元) </h3>

	<?php 
	$total=0;
	$i=1;
	$rand=10;
	do{
		$rand = mt_rand(0,10);
		echo " 第 $i 次:$rand <br>";
		$i++;
		$total += $rand;
	}While($rand != 0);
	echo " <hr>次數: $i <br> ";
	echo "  彩金總金額: $total ";

	?>
	
</body>
</html>