<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php 
// echo "小計",$_REQUEST["price"]*$_REQUEST["quantity"],"元";

$A=$_REQUEST["price"];
$B=$_REQUEST["quantity"];
$money=$A*$B;
if($money >= 1000){
   $discount=$money*0.7;
   echo "小記：$discount";
}
elseif
	($money >= 500){
	$discount=$money*0.9;
	echo "小記：$discount";
}
   else{
   echo "小記：$money";
}


// echo "小記：$discount";


?>

</body>
</html>