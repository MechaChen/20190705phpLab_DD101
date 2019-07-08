<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	$total = 0;

	switch ($_POST["level"]) {
		case "1":
		if ($_POST["kilo"] <= 40) {
			$total += 30 * $_POST["kilo"] ;
		} elseif ($_POST["kilo"] > 40 && $_POST["kilo"] <= 100) {
			$total += 25 * $_POST["kilo"] ; 
		} elseif ($_POST["kilo"] > 100) {
			$total += 20 * $_POST["kilo"] ;
		}
		break;
	}

	switch ($_POST["level"]) {
		case "2":
		if ($_POST["kilo"] <= 40) {
			$total += 25 * $_POST["kilo"] ;
		} elseif ($_POST["kilo"] > 40 && $_POST["kilo"] <= 100) {
			$total += 20 * $_POST["kilo"] ; 
		} elseif ($_POST["kilo"] > 100) {
			$total += 15 * $_POST["kilo"] ;
		}
		break;
	}
	
	switch ($_POST["level"]) {
		case "3":
		if ($_POST["kilo"] <= 40) {
			$total += 20 * $_POST["kilo"] ;
		} elseif ($_POST["kilo"] > 40 && $_POST["kilo"] <= 100) {
			$total += 15 * $_POST["kilo"] ; 
		} elseif ($_POST["kilo"] > 100) {
			$total += 10 * $_POST["kilo"] ;
		}
		break;
	}

	echo "小計 : ", $total;


	 ?>
</body>
</html>