<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php 
$price = 0;
$level=$_REQUEST["level"];
$kg=$_REQUEST["kg"];
$total＝0;

if($level == 1){
	if($kg>=100){
		$price=20;
	}
   elseif($kg>40){
		$price=25;
	}  
	elseif($kg<=40){
	   $price=30;
	} 

}
	elseif($level == 2){
	if($kg<=40){
	   $price=25;
	}
	elseif($kg>40){
	$price=20;
	}   
	elseif($kg>=100){
	$price=15;
	}
}
	elseif($level == 3){
	if($kg<=40){
	   $price=20;
	}
	elseif($kg>40){
	$price=15;
	}   
	elseif($kg>=100){
	$price=10;
	}
}

$total=$kg*$price;
echo"小記: $total 元";
?>
</body>
</html>