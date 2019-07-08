<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		caption {
			color:deeppink;
			font-size: 20px;
		}
		th {
			background-color: pink;
		}
			caption {padding: 10px 0;}
		tr, td, th{padding:5px;}
	</style>
</head>
<body>
	


<?php 
$name="小丸子";
$age="是秘密喲...";
$address="漫畫走廊...";

echo
"<div>
<table border 1px>
<caption><strong>個人小檔案</strong></caption>
	<tr>
		<th>姓名：</th>
		<td>{$name}</td>
	</tr>
	<tr>
		<th>年齡：</th>
		<td>{$age}</td>
	</tr>
	<tr>
		<th>地址：</th>
		<td>{$address}</td>
	</tr>
</table>
</div>"




 ?>	
</body>
</html>