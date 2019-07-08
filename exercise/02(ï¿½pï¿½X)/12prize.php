<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<h2>while</h2>

	<?php

	$i=1;
	$x=0;
	$total=0;
	while($i<=10){
		$x=rand(0,10);
		echo "$x<br>";
		$total=$total += $x;
		$i++;
		if($x==0){
			break;
		}
	}

	$total=$total*100;
	echo "總額是:","$total";
?>

<h2>do..while</h2>

<?php 
$i=1;
$x=0;
$total=0;
do{
	$x=rand(0,10);
	echo "$x<br>";
	$total=$total+=$x;
	$i++;
	if($x==0){
		break;
	}
}while($i<=10);
$total=$total*100;
echo "總額是:","$total";

 ?>
	
</body>
</html>