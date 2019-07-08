
<?php 

$level=$_GET["level"];
$kg=$_GET["kg"];
$price=0;

		if ($level=="1") {
			$price=30;

			if ($kg>100) {
				$price-=10;
			}

			elseif ($kg>=40) {
				$price-=5;
			}

			else {
				$price=$kg*30;
			}
		 	
		 } 

		 if ($level=="2") {
			$price=25;


			if ($kg>100) {
				$price-=10;
			}

			elseif ($kg>=40) {
				$price-=5;
			}

			else {
				$price=$kg*25;
			}
		 	
		 } 


		 if ($level=="3") {
			$price=20;


			if ($kg>100) {
				$price-=10;
			}

			elseif ($kg>=40) {
				$price-=5;
			}

			else {
				$price=$kg*20;
			}
		 	
		 } 

?>









<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>作業7</title>
	<style type="text/css">
		table,th,td{
			border: 1px solid grey;
		}


	</style>
</head>
<body>
<table>
	<caption>訂單結果</caption>
	<tr>
		<td>等級</td>
		<td> <?php echo $level; ?></td>
	</tr>
	<tr>
		<td>公斤數</td>
		<td><?php echo $kg; ?></td>
	</tr>
	<tr>
		<td>總價</td>
		<td><?php echo $price; ?></td>
	</tr>
</table>


	
</body>
</html>