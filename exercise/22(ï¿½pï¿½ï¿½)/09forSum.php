<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>09forSum</title>
</head>
<body>
	<!-- 輸入一正整數,並算1 到此整數間的總和、奇數和、偶數和 -->
	<?php 
	$a= $_GET["number"];
	echo "您輸入的正整數為: {$a} <br>";   //先宣告一下

	$at=1; //at借用一下
	$total=0 ;//要算總和
	for ($at=1; $at < $a ; $at++) { 
		$total = $total + $at ;
	}
	echo "1到{$a}的正整數和為: {$total}<br>";

	$at=1; //at再借用一下
	$bt=0; //奇數和
	for ($at=1; $at < $a; $at = $at+2) { 
		$bt = $bt+ $at ;
	}
	echo "1到{$a}的奇數和為: {$bt}<br>";

	$at=2; //at再借用一下
	$ct=0; //偶數和
	for ($at=2; $at < $a; $at = $at+2) { 
		$ct = $ct+ $at ;
	}
	echo "1到{$a}的偶數和為: {$ct}<br>";
	 ?>
</body>
</html>