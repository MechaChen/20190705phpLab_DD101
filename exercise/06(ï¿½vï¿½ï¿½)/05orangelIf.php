<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


	<?php 

		$a = $_POST["txtPrice"];
		$b = $_POST["txtNumber"];

		$total = $a * $b;	 
	 
		if ($total > 500) {
			$total = $total * 0.9;			
		}
	?>
	 
	
<center>
	<h2>買橘子</h2>
 <table border="1">

			<tr>
				<td>單價：</td>
				<td><?php echo $_POST["txtPrice"],"<br>"; ?></td>
			</tr>
			<tr>
				<td>數量：</td>
				<td><?php echo $_POST["txtNumber"],"<br>"; ?></td>
			</tr>
			<tr>
				<td>總價：</td>
				<td><?php echo $total ?></td>
			</tr>

		</table>
</center>


</body>
</html>