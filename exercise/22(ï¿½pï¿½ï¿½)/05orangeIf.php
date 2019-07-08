<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>05orangeIf</title>
</head>
<body>
	<!-- 寫程式可輸入橘子一斤的單價, 及購買的斤數,並算出小計為何,
若消費金額超過500元, 則打九折, -->
	<?php 
	$P= $_GET["price"];
	$N= $_GET["number"];
	$total= $P*$N;
	if ($total > "500") {
		$total= $total*0.9;
	}
		echo $total;
	 ?>

</body>
</html>