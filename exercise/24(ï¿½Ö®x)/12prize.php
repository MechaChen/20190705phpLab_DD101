<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>12prize_HW</title>
	<style type="text/css">
		table, td{
			border: 1px solid #ccc;
			border-collapse: collapse;
			margin-top: 10px;
			text-align: center;
		}

		td{
			width: 50px;
		}

	</style>
</head>
<body>
	<?php 
		echo "<table><tr><td>次數</td><td>彩金</td>";

		$time = 1;
		$total = 0;

		do{
			$number = rand(0,10);
			$prize = $number * 100;
			if($number == 0){
				break;
			}
			echo "<tr><td>$time</td>", "<td>$prize</td></tr>";
			$total = $total + $prize;
			$time++;
		}while($number != 0)
	?>	
	
	<?php 
	 	echo "摸彩總次數：$time <br>", "彩金總金額：$total";
	?>
</body>
</html>