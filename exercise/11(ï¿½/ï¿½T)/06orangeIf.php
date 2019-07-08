<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	
	<?php

	$total=$_GET["price"]*$_GET["number"];
	
	

	if($total>1000){
		$total=$total*0.7;
	}elseif($tatol>500){
		$total=$total*0.9;
	}


	echo $total;

	?>


	
</body>
</html>