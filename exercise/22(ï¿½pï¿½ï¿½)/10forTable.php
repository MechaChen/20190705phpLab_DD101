<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>10forTable</title>
	<style type="text/css">

		table{
			width: 400px;
		}
		td{
			border: 1px solid #333;
			width: 190px;
			margin: 0;
		}
	</style>
</head>
<body>
	<?php 
	echo "印出資料如下表:";
	echo " <table >";	
	$i=0;
	for ($i=1; $i <=10; $i++) { 
		if ($i % 2 == 1) {
			echo " <tr><td>$i</td>";
		}elseif ($i % 2 == 0) {
			echo " <td>$i</td></tr>";
		}		
	}
	echo "</table>";
	 ?>

	
</body>
</html>