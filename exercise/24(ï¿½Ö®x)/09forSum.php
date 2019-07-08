<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>09forSum_HW</title>
	<style type="text/css">
		.sum{
			width: 300px;
			margin: 10px auto;
			text-align: center;
		}

		.sum, .sum td{
			border: 1px solid #888;
		}

		.first_col{
			width: 200px;
		}

		.second_col{
			width: 100px;
		}
	</style>
</head>
<body>
	<?php 
		$sum = 0;
		for($a = 1; $a <= $_GET["number"]; $a++){
			$sum = $sum + $a;
		}

		$oddSum = 0;
		for($a = 1; $a<= $_GET["number"]; $a++){
			if($a % 2 == 1){
				$oddSum += $a;
			}
		}

		$evenSum = 0;
		for($a = 1; $a<= $_GET["number"]; $a++){
			if($a % 2 == 0){
				$evenSum += $a;
			}
		}
		
		echo "
		<table class=\"sum\">
			<tr>
				<td class=\"first_col\">輸入的整數</td>
				<td class=\"second_col\">{$_GET["number"]}</td>
			</tr>
			<tr>
				<td>1 到 {$_GET["number"]} 之間的總和</td>
				<td>{$sum}</td>
			</tr>
			<tr>
				<td>1 到 {$_GET["number"]} 之間的奇數和</td>
				<td>{$oddSum}</td>
			</tr>
			<tr>
				<td>1 到 {$_GET["number"]} 之間的偶數和</td>
				<td>{$evenSum}</td>
			</tr>
		</table>
		"
	?>
</body>
</html>