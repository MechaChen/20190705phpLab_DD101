<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>11prizeFor_HW</title>
	<style type="text/css">
		table, td{
			border: 1px solid #ccc;
			border-collapse: collapse;
			margin-bottom: 10px;
			text-align: center;
		}

		td{
			width: 50px;
		}

	</style>
</head>
<body>
	<?php 
		echo "<table><tr><td>次數</td>";
		for($time = 1; $time <=10; $time++){
			echo "<td>$time</td>";
		}
		echo "</tr><tr><td>彩金</td>";
	?>

	<?php
		$total = 0;	
		
		for($time = 1; $time <= 10; $time++){
			$number = rand(0,10);
			$prize = $number * 100;
			echo "<td>$prize</td>";
			$total = $total + $prize;
		}
		echo "</tr></table>", "彩金總金額：$total";
	?>
</body>
</html>