<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	
	<?php

	$price=$_GET["price"]*$_GET["number"];
	if($price>=500)
		$price=$price*0.9;
	echo "總金額{$price}";

	?>


	
</body>
</html>