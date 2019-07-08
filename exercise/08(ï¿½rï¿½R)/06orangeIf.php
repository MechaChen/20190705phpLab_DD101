<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	</title>
	<style type="text/css">
		caption{
			padding-bottom: 10px;
		}
		th{
			width: 150px;
			text-align: center;
		}
		td{
			width: 300px;
			text-align: center;
		}
	</style>
</head>
<body>
<table border="2">
<caption>總計</caption>
<tr>
	<th>單價</th>
	<th><?php echo $_GET["a"]; ?></th>
</tr>
<tr>
	<th>數量</th>
	<td><?php echo $_GET["b"]; ?></td>
</tr>
<tr>
	<th>總計</th>
	<td><?php echo $_GET["a"] * $_GET["b"]; ?></td>
</tr>
<tr>
	<th>折扣後總計</th>
	<td>
	<?php 
	 $total = $_GET["a"] * $_GET["b"];
		if ($total >= 1000){
			$total=$total* 0.7;
			echo "$total";
			}
		elseif ($total >= 500){
			$total=$total* 0.9;
			echo "$total";
			}
	?>
	</td>
</tr>


</table>

	
</body>



</html>