<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
<style type="text/css">
h2 {
	color:deeppink;
}	
td {
	width:30px;
	text-align:center;
}
</style>
</head>
<body>

<h2>印10個I love php~~</h2>	
<?php
$i=1;
do{
	echo "I love PHP~~<br>";
	$i++;
}while($i<=10);


?>

<h2>印出1、2 、3 、…..10</h2>
<?php 
$i=1;
do{
	echo "$i 、";
	$i++;
} while($i<10);
echo $i, "<br>";
?>


<h2>計算1+2+3+….+50 = </h2>
<?php 
$i = 1;
$total = 0;
do{
	$total += $i;
	$i++;
} while($i <= 50);
echo "總和: $total<br>";
?>

<h2>印出 1到50間3的倍數,並計算這些數的總和</h2>
<?php
$i=3;
$total=0;
do{
	echo $i, "<br>";
	$total += $i;
	$i += 3;
}while( $i <= 50);
echo "總和: $total<br>";
?>






</body>
</html>