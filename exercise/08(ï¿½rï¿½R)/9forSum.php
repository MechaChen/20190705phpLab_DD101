<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	</title>
	<style type="text/css">
		caption{
			padding-bottom: 10px;
		}
		th{
			width: 150px;
			text-align: center;
		}
		td{
			width: 300px;
			text-align: center;
		}
	</style>
</head>
<body>

<?php
$number = $_GET["number"];
$total = 0;
$oddNumber = 0;
$even = 0;
$i = 0;

for($i=1; $i<=$number; $i++){
    $total = $total + $i;
}
for($i=1; $i<=$number; $i++){
	if($i % 2 == 1){
	$oddNumber = $oddNumber + $i;
	}
}
for($i=2; $i<=$number; $i++){
	if($i % 2 == 0){
	$even = $even + $i;
	}
}
?>


<table border="2">
<caption>正整數</caption>
<tr>
	<th>輸入值</th>
	<td>
		<?php echo $number; ?>
	</td>
</tr>
<tr>
	<th>總和</th>
	<td>
		<?php echo $total; ?>
	</td>
</tr>
<tr>
	<th>奇數和</th>
	<td>
		<?php echo $oddNumber; ?>
	</td>
</tr>
<tr>
	<th>偶數和</th>
	<td>
		<?php echo $even; ?>
	</td>
</tr>
</table>
	
</body>

</html>