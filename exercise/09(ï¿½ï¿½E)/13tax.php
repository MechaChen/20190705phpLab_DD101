<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h2>您應繳稅額為:</h2>

<?php 
$i = $_GET["num"];
$tax=0;
if($i<=540000){$tax=$i*0.05;}
	elseif($i<=1210000){
		$tax=$i*0.12-37800;}
		elseif($i<=2420000){
			$tax=$i*0.2-134600;}
			elseif($i<=4530000){
				$tax=$i*0.3-376600;}
				elseif($i<=10310000){
					$tax=$i*0.4-829600;}
					else{$tax=$i*0.45-1345100;}

echo "{$tax}元";

 ?>

	
</body>
</html>