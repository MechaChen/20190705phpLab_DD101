<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
$total=0;
$i=0;
do{
	$rand=rand(0,10)*100;
	$i=$i+1;
	$total=$total+$rand*100;
	echo "$rand<br>";
}while($rand !=0);


echo "次數",$i,"<br>";
echo $total;
?>	 


<?php
$total=0;
$i=1;
$rand=rand(0,10);
echo "次數第一次<br>",$rand,"<br>";
while($rand !=0){
	$i=$i+1;
	$total=$total+$rand*100;
	$rand=rand(0,10);
	echo "次數",$i,"<br>";
	echo "$rand<br>";
}
	echo $total;

?>

</body>
</html>