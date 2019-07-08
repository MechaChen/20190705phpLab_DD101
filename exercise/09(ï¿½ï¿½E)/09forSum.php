<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		table,tr,td {border: 1px solid;}
	</style>
</head>
<body>
<table>
	<tr>
		<td>總和:</td>
		<td><?php  
		$total=0; 
		$num=$_GET["num"];
		for($i=1;$i <= $num;$i++){
		$total=$i+$total;

		}
		echo $total;

		?></td>
	</tr>
	<tr>
		<td>奇數和:</td>
		<td><?php  
		$total=0; 
		$num=$_GET["num"];
		for($i=1;$i <= $num;$i=$i+2){
		$total=$i+$total;

		}
		echo $total;

		?></td>
	</tr>
	<tr>
		<td>偶數和:</td>
		<td><?php  
		$total=0; 
		$num=$_GET["num"];
		for($i=2;$i <= $num;$i=$i+2){
		$total=$i+$total;

		}
		echo $total;

		?></td>
	</tr>

</table>
	
</body>
</html>