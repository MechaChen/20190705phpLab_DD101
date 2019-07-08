<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php 

		$Amount = 100;
		$LumpSum = 0;

		for ($i=0 ; $i <= 9 ; $i++) {

			$rand = mt_rand(0,10);
			$total = $Amount * $rand;
			$LumpSum += $total;
			echo "$total<br>";
			}
			echo "彩金總額= $LumpSum<br>";

			
	 ?>
	
</body>
</html>