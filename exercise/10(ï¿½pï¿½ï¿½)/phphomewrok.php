<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		
	table{
		position: relative;
		margin:auto;
		border: 1px solid #000;
		font-size:16px;
		border: 1px solid #000;
		text-align: center;
	}

	td{
		border: 1px solid #000;
		padding: 5px;

	}

	h2{
		position: relative;
	}

	.td1 {
		background-color: #FFBB66;
		font-weight: bold;
	}

	.td2 {
		background-color: #FFCCCC;
		font-weight: bold;
	}

	.tit1{
		color:#5599FF;
		text-align: center;

	}

	.tit2{
		color:#FF0088;
		text-align: center;
	}

	</style>
</head>
<body>

	

	<?php 
	echo 
	"
	<h2 class=tit1>好媒媒班級通訊錄</h2>
	<table>
	<tr>
		<td class=td1>學號</td>
		<td class=td1>姓名</td>
		<td class=td1>電話</td>
		
	</tr>
	<tr>
		<td>94951001</td>
		<td>黃一丁</td>
		<td>0911000333</td>
		
	<tr>
		<td>94951002</td>
		<td>劉二毛</td>
		<td>0922999887</td>
		
	</tr>
	<tr>
		<td>94951003</td>
		<td>張大化</td>
		<td>0933555779</td>
		
	</tr>
	</table>
	"

	 ?>


	<?php 
	$name="小丸子";
	$age="是秘密";
	$address="漫畫走廊";

	echo "

	<h2 class=tit2>個人小檔案</h2>
	<table>
	<tr>
		<td class=td2>姓名：</td>
		<td>$name</td>
	</tr>
	<tr>
		<td class=td2>年齡：</td>
		<td>$age</td>
	</tr>
	<tr>
		<td class=td2>地址：</td>
		<td>$address</td>
	</tr>
	</table>
	"
	 ?>

</body>
</html>