<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>作業12</title>
</head>
<body>

	<?php 


	$i=0;
	$total=0;
	do{
		$rand=rand(0,10);
		$i++;
		$total += $rand;
	}while ($rand != 0); 
	
	echo"摸彩次數:",$i,"<br>";
	echo"摸彩總金額:",$total*100,"<br>";
	
	?>


	
</body>
</html>