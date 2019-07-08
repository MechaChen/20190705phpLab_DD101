<?php 

$salary=$_GET["salary"];
$taxTotal=0;

if ($salary <=540000) {
	$taxTotal = $salary *0.05 ;
	}elseif ($salary >=540001 && $salary<1210000) {
	$taxTotal = $salary *0.12 - 37800;
	}

	elseif ($salary>=1210001 && $salary<2420000) {
	$taxTotal = $salary *0.2 -134600;
	}

	elseif ($salary>=2420001 && $salary<4530000) {
	$taxTotal = $salary *0.3 -376600;
	}

	elseif ($salary>4530001 && $salary<10310000) {
	$taxTotal = $salary *0.4 -829600;
	}

	else{
	$taxTotal = $salary * 0.45- 1345100;

	}

?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>作業13</title>
</head>
<body>
	<div>
		<p> 您的綜合所得淨額: <?php echo $salary; ?> </p>
		<p> 應納稅額: <?php echo $taxTotal; ?> </p>

	</div>
	

	
</body>
</html>