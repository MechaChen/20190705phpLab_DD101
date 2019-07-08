<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
<style type="text/css">
	table,tr, td, th{
		border: 1px solid #000000;
	}
	td{
		padding: 5px 10px;
	}

	th{
		background-color: #ff9abb;
		padding: 5px 10px;
	}

	table caption{
		font-size: 16pt;
		color: #ce4c00;
		margin: 10px 0;
	}
</style>



</head>
<body>



<?php 

	$name="小丸子";
	$old= 25;
	$address="桃園市中壢區中央路";

	echo "

	<table>
	<caption>個人小檔案</caption>
	<tr>
		<th>姓名:</th>
		<td>{$name}</td>
	</tr>
	<tr>
		<th>年齡:</th>
		<td>{$old}</td>
	</tr>
	<tr>
		<th>地址:</th>
		<td>{$address}</td>
	</tr>
	</table>";



 ?>
    
</body>
</html>