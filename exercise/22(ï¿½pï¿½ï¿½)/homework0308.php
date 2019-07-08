<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>homework0308</title>
	<style type="text/css">
		table caption{
			color: #FF4D40;
			font-size: 20pt;
			margin-bottom: 10pt;
		}
		table thead tr th{
			color: #000; 
		}
		table thead tr td{
			color: #000;
		}
		table tbody tr td{
			color: #000;
		}
		table thead tr th{
			background-color: #FFB366;
		}
		h1{
			color: deeppink;
		}
		tr th{
			background-color: #FFB6C1;
		}
	</style>

</head>
<body>
	<?php  
	echo "<table border=2>\t";
	echo "<caption>好媒媒通訊錄</caption>\t";
	echo "<thead>\t<tr>\t<th>學號</th>\t<th>姓名</th>\t<th>電話</th>\t</tr>\t</thead>\t";
	echo "<tbody>\t<tr>\t<td>94951001</td>\t<td>黃一丁</td>\t<td>0911000333</td>\t</tr>\t";
	echo "<tr>\t<td>94951002</td>\t<td>劉二毛</td>\t<td>0922999887</td>\t</tr>\t";
	echo "<tr>\t<td>94951003</td>\t<td>張大化</td>\t<td>0933555779</td>\t</tr>\t";
	echo "</tbody>\t";
	echo "</table>\t";
	?>
	<?php 
	$name="小丸子";
	$age= "是秘密呦...";
	$address="漫畫走廊...";
	echo "<h1>個人小檔案</h1>\t";
	echo "<table border=2>\t<tr><th>姓名:</th>\t<td>$name</td>\t</tr>\t<tr>\t<th>年齡:</th>\t<td>$age</td>\t</tr>\t<tr>\t<th>地址:</th>\t<td>$address</td>\t</tr>\t</table>\t";
	?>
</body>
</html>