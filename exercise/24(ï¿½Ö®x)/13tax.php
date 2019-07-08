<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>13tax_HW</title>
</head>
<body>
	<?php 
		if($_GET["money"] >= 10310001){
			$tax = $_GET["money"] * 0.45 - 1345100;
		}
		elseif($_GET["money"] >= 4530001){
			$tax = $_GET["money"] * 0.4 - 829600;
		}
		elseif($_GET["money"] >= 2420001){
			$tax = $_GET["money"] * 0.3 - 376600;
		}
		elseif($_GET["money"] >= 1210001){
			$tax = $_GET["money"] * 0.2 - 134600;
		}
		elseif($_GET["money"] >= 540001){
			$tax = $_GET["money"] * 0.12 - 37800;
		}
		else{
			$tax = $_GET["money"] * 0.05;
		}
		echo "應納稅額：{$tax}元";
	?>
</body>
</html>