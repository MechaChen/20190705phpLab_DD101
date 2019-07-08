<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


	<?php 

		$number = $_POST["txtNumber"];
		$total = 0;
		$oddNumaer = 0;
		$even = 0;


		for ($i=0; $i <= $number ; $i++) { 
			$total = $total +$i;
		}

		for ($i=0; $i <= $number ; $i++) { 

			if ($i % 2 > 0 ) {

				$oddNumaer = $oddNumaer +$i;
			}
		}

		for ($i=0; $i <= $number ; $i++) { 

			if ($i % 2 == 0 ) {

				$even = $even +$i;
			}
		}
		
	?>
	 
	
<center>
	<h2>總合</h2>
 <table border="1">

			<tr>
				<td>總和：</td>
				<td><?php echo $total ?></td>
			</tr>
			<tr>
				<td>奇數和：</td>
				<td><?php echo $oddNumaer ?></td>
			</tr>
			<tr>
				<td>偶數和：</td>
				<td><?php echo $even ?></td>
			</tr>

		</table>
</center>


</body>
</html>