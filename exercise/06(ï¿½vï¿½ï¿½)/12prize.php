<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<?php 
		$Amount = 100;
		$i = 0;
		$LumpSum = 0;

		do {

			$i++;
			$rand = mt_rand(0,10);
			$total = $Amount * $rand;
			$LumpSum += $total;
			echo "$total<br>";

		} while ( $rand !== 0);
		echo "總金額金額= $LumpSum";
		echo "抽獎次數: $i";
			
	 ?>

</body>
</html>