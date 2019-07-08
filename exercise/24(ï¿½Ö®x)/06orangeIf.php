<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>06orangeIf_HW</title>
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
		$total = $_GET["price"] * $_GET["quantity"];
		if($total > 1000)
			$total *= 0.7;
		elseif($total > 500)
			$total *= 0.9;

		echo "
		<table class=\"orange\">
			<caption>計價</caption>
			<tr>
				<td class=\"first_col\">橘子單價</td>
				<td class=\"second_col\">{$_GET["price"]}</td>
			</tr>
			<tr>
				<td>購買斤數</td>
				<td>{$_GET["quantity"]}</td>
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