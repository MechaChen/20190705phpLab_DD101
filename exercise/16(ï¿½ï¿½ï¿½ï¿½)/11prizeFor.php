<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>作業11</title>
</head>
<body>
<?php 

	$total=0;
	for ($i=1; $i <=10 ; $i++) { 
		$rand=rand(0,10);

	echo "每次摸彩金額為",$rand*100,"<br>";	
		
	$total += $rand;

	}
	echo"摸彩總金額:",$total*100,"<br>";
	 ?>


	


	
</body>
</html>