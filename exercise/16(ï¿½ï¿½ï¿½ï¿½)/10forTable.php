








<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>作業10</title>
	<style type="text/css">
		table,th,td{
			border: 1px solid grey;
			margin: 0 auto;
			width: 500px;
	</style>
</head>
<body>
<table>

<?php 

$i=0;


		for ($i=1; $i <=10 ; $i++) { 
			
			if ($i%2==1){
				echo "<tr><td>$i</td>";
			} 

			elseif($i%2==0){
				echo "<td>$i</td></tr>";
			}
		}
	
 ?>
</table>
</body>





	
</body>
</html>