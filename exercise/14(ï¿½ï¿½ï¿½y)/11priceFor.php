<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		
		$total = 0;
		for($i=1; $i<=10; $i++){
			$r = rand(0,10);
			
			$total = $total + $r;
			echo "摸彩數字為：",$r,"<br>";
		}
		
		echo "總金額為：", $total * 100 ;
	?>



</body>
</html>