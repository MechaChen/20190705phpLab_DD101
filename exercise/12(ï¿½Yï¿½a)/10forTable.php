<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<style type="text/css">
	table{
		text-align: center;
	}
	td {
		padding: 0 100px;
	}

</style>

</head>
<body>

		<table border="1">
			<?php 
			for($i =1;$i <=10;$i ++){
				if($i % 2 ==1) 
					echo "<tr>";
				echo "<td> {$i} </td>";
				if($i %2 ==0) 
					echo "</tr>";
			}
			 ?>
		</table>

</body>
</html>