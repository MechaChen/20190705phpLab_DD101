<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		td {
			width: 200px;
		}
	</style>
</head>
<body>
	<table border = "1">
		<tbody>
			<?php 

			for ($i=1; $i<=10; $i++) {
				if ($i % 2 == 1) {
					echo "<tr>", "<td>$i</td>";
				} else {
					echo "<td>$i</td>", "</tr>";	
				}
			}
			 ?>
		</tbody>
	</table>
</body>
</html>