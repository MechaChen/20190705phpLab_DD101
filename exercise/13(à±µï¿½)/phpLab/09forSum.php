<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<?php 

	$total = 0;
	$oddTotal = 0;
	$evenTotal = 0;

	for ($i = 1 ; $i <= $_POST["number"] ; $i++) {
		$total += $i;
	}
	echo "總和 : ", $total, "<br>";

	for ($i = 1 ; $i <= $_POST["number"] ; $i++) {
		if ($i % 2 ==1) {
			$oddTotal += $i;
		} 
	}
	echo "奇數和 : ", $oddTotal, "<br>";

	for ($i = 1 ; $i <= $_POST["number"] ; $i ++) {
		if ($i % 2 ==0) {
			$evenTotal += $i;
		}
	}
	echo "偶數和 : ", $evenTotal;

	 ?>



</body>
</html>