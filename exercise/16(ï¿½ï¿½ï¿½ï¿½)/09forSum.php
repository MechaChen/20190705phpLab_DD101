<?php 

$integer=$_GET["integer"];
$total=0;
$oddtotal=0;
$eventotal=0;


for ($i=1; $i<=$integer ; $i++) { 
	$total=$total+$i;
	
}

for ($i=1; $i<=$integer ; $i++) { 
	if ($i%2==1) {
		$oddtotal=$oddtotal+$i;
		
	}
}

for ($i=1; $i<=$integer ; $i++) { 
	if ($i%2==0) {
		$eventotal=$eventotal+$i;
		
	}
}


 ?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>作業9</title>
	<style type="text/css">
		table,th,td{
			border: 1px solid grey;
			margin: 0 auto;
			width: 500px;
		}

		
	</style>

	

</head>
<body>
	<table>
	<caption>整數計算</caption>
	<tr>
		<td>輸入整數</td>
		<td> <?php echo $integer;  ?></td>
	</tr>
	<tr>
		<td>總和</td>
		<td> <?php echo $total; ?> </td>
	</tr>
	<tr>
		<td>奇數總和</td>
		<td><?php echo $oddtotal; ?></td>
	</tr>
	<tr>
		<td>偶數總和</td>
		<td><?php echo $eventotal; ?></td>
	</tr>
</table>
	
</body>
</html>