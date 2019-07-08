<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>07orangeIf_HW</title>
	<style type="text/css">
		.orange{
			width: 200px;
			margin: 10px auto;
			text-align: center;
		}

		caption{
			margin-bottom: 10px;
		}

		.orange, .orange td{
			border: 1px solid #888;
		}

		.first_col{
			width: 100px;
		}

		.second_col{
			width: 100px;
		}
	</style>
</head>
<body>
	<?php 
		if($_GET["grade"] == "1"){
			if($_GET["kilogram"] > 100){
				$total = 20 * $_GET["kilogram"];
			}
			elseif($_GET["kilogram"] > 40){
				$total = 25 * $_GET["kilogram"];
			}
			elseif($_GET["kilogram"] <= 40){
				$total = 30 * $_GET["kilogram"];
			}
		}
		elseif($_GET["grade"] == "2"){
			if($_GET["kilogram"] > 100){
				$total = 15 * $_GET["kilogram"];
			}
			elseif($_GET["kilogram"] > 40){
				$total = 20 * $_GET["kilogram"];
			}
			elseif($_GET["kilogram"] <= 40){
				$total = 25 * $_GET["kilogram"];
			}
		}
		elseif($_GET["grade"] == "3"){
			if($_GET["kilogram"] > 100){
				$total = 10 * $_GET["kilogram"];
			}
			elseif($_GET["kilogram"] > 40){
				$total = 15 * $_GET["kilogram"];
			}
			elseif($_GET["kilogram"] <= 40){
				$total = 20 * $_GET["kilogram"];
			}
		}

		echo "
		<table class=\"orange\">
			<caption>計價</caption>
			<tr>
				<td class=\"first_col\">等級</td>
				<td class=\"second_col\">{$_GET["grade"]}</td>
			</tr>
			<tr>
				<td>購買斤數</td>
				<td>{$_GET["kilogram"]}</td>
			</tr>
			<tr>
				<td>小計</td>
				<td>{$total}</td>
			</tr>
		</table>
		"
	?>
</body>
</html>