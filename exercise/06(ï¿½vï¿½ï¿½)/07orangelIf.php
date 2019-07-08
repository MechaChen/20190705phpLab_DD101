<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


	<?php 

		$level = $_POST["txtLevel"];
		$kg = $_POST["txtNumber"];	 
	 
		if ($level == 1) {

			if ($kg >= 40) {
				$total = $kg * 25;
			}
			if ($kg >= 100) {
				$total = $kg * 20;
			}

			if ($kg < 40) {
				$total = $kg * 30;
			}
		}
		if ($level == 2) {

			if ($kg >= 40) {
				$total = $kg * 20;
			}
			if ($kg >= 100) {
				$total = $kg * 15;
			}

			if ($kg < 40) {
				$total = $kg * 25;
			}
		}
		if ($level == 3) {

			if ($kg >= 40) {
				$total = $kg * 15;
			}
			if ($kg >= 100) {
				$total = $kg * 10;
			}

			if ($kg < 40) {
				$total = $kg * 20;
			}
		}
	?>
	 
	
<center>
	<h2>買橘子</h2>
 <table border="1">

			<tr>
				<td>等級：</td>
				<td><?php echo $_POST["txtLevel"],"<br>"; ?></td>
			</tr>
			<tr>
				<td>數量(公斤)：</td>
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