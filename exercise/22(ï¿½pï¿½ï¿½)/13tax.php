<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>13tax</title>
	<style>
		img{
			width: 500px;
			height: 300px;
		}
	</style>
</head>
<body>
	<div>
		<img src=".\tax.png" alt="所得稅計算">
	</div>
	<?php 
	$mon = $_GET["money"];
	echo "您的綜合所得淨額為 $mon 元，";
	if ($mon <= 540000) {
		$mon*= 0.05;
	}elseif ($mon > 540000 && $mon <= 1210000 ) {
		$mon = $mon*0.12-37800;
	}elseif ($mon > 1210000 && $mon <= 2420000) {
		$mon = $mon*0.2-134600;
	}elseif ($mon > 2420000 && $mon <=4530000 ) {
		$mon = $mon*0.3-376600;
	}elseif ($mon > 4530000 && $mon <= 10310000) {
		$mon = $mon*0.4-829600;
	}else{
		$mon = $mon*0.45-1345100;
	}
	echo "應繳納稅額為 $mon 元<br>";
	 ?>

</body>
</html>