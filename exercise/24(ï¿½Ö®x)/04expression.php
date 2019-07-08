<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>expresstion_orangeShow</title>
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