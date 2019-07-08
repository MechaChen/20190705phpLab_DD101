<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


<?php

	$INCOME = $_POST["TEX"];
	$Tax = 0;
	
	if ($INCOME <= 540000) {
		$Tax = $INCOME * 0.05;
	}elseif ($INCOME <= 1210000) {
		$Tax = $INCOME * 0.12 - 37800;
	}elseif ($INCOME <= 2420000) {
		$Tax = $INCOME * 0.2 - 134600;
	}elseif ($INCOME <= 4530000) {
		$Tax = $INCOME * 0.3 - 376600;
	}elseif ($INCOME <= 10310000) {
		$Tax = $INCOME * 0.4 - 829600;
	}else{
		$Tax = $INCOME * 0.45 - 1345100;
	}
 ?>



	
<table>
	<tr>
		<td>應繳稅額：</td>
		<td><?php echo $Tax ?></td>
	</tr>
</table>


</body>
</html>