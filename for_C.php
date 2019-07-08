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
for( $i=1; $i<=3; $i++){
	echo "I love PHP~~~<br>";
}

?>

<h2>印出1、2 、3 、…..10-------方法1</h2>
<?php 
for( $i=1; $i<=10; $i++){
	echo $i;
	
	if( $i <= 9){
		echo "、";
	}
} 
?>

<h2>印出1、2 、3 、…..10-------方法2</h2>
<?php 
for( $i=1; $i<=9; $i++){
	echo $i,"、";
}
echo $i, "<br>";
?>

<h2>計算1+2+3+….+50 = </h2>
<?php 
$total = 0;   //total : 0+1+2+3+4
for( $i=1; $i<=50; $i++){  //i:4
	$total = $total + $i;
}
echo "總和: $total<br>";
?>


<h2>印出 1到50間3的倍數,並計算這些數的總和...1</h2>
<?php 
$total = 0;   
for( $i=1; $i<=50; $i++){  
	if( $i % 3 == 0){
		echo $i, "<br>";
		$total = $total + $i;
	}
}
echo "總和: $total<br>";
?>

<h2>印出 1到50間3的倍數,並計算這些數的總和...2</h2>
<?php 
$total = 0; 
for( $i = 3; $i <= 50; $i = $i + 3){  //
	echo $i, "<br>";
	$total = $total + $i;
}
echo "總和: $total<br>";
?>

<h2>印在表格中</h2>
<?php 
echo "<table align='center' border='1' cellspacing='0'>";
for( $i=1; $i<=10; $i++){
	echo "<tr><td>$i</td></tr>";
}
echo "</table>";
?>
</body>
</html>