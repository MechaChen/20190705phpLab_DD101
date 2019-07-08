<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		
	</style>
</head>
<body>
	
	
	<?php 
	$sum = 0;

	if ($_POST["tax"] < 540000) {
		$sum += $_POST["tax"] * 0.05 - 0;
	} elseif ($_POST["tax"] <= 1210000) {
		$sum += $_POST["tax"] * 0.12 - 37800;
	} elseif ($_POST["tax"] <= 2420000) {
		$sum += $_POST["tax"] * 0.2 - 134600;
	} elseif ($_POST["tax"] <= 4530000) {
		$sum += $_POST["tax"] * 0.3 - 376600;
	} elseif ($_POST["tax"] <= 10310000) {
		$sum += $_POST["tax"] * 0.4 - 829600;
	} else {
		$sum += $_POST["tax"] * 0.45 - 1345100;
	}
	echo "應納稅額 : $sum 元";
	 ?>



</body>
</html>