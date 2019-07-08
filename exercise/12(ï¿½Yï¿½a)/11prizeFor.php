<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		div,h3{
			text-align: center;
		}
	</style>
</head>
<body>
	<h3>11-摸彩金 : 有11顆彩球, 彩球面額為0-10之間, 可以摸彩10次, 印出其每次的摸彩金額及彩金總金額(單位:佰元)</h3>
    <div>
	<?php
	$total=0;
	for($i= 1;$i <=10 ;$i++){
		$rand =mt_rand(0,10);
		echo "第 $i 次:  $rand <br>";
		$total += $rand ;
	}echo "<hr>彩金總金額:", $total*100 , "元";
	
	 ?>
	 </div>

</body>
</html>