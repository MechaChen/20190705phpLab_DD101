<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>10forTable_HW</title>
	<style type="text/css">
		.table{
			width: 600px;
			margin: 20px auto;
			border-collapse: collapse;
		}

		.table, .table td{
			border: 1px solid #888;
			padding: 3px 5px;
		}

		.table td{
			width: 300px;
		}
	</style>
</head>
<body>
	<?php 
		echo "<table class=\"table\">";

		for($a = 1; $a<= 10; $a++){
			if($a % 2 == 1){
				echo "<tr><td> $a </td>";
			}
			elseif($a % 2 == 0){
				echo "<td> $a </td></tr>";
			}
		}

		echo "</table>";
	?>
</body>
</html>