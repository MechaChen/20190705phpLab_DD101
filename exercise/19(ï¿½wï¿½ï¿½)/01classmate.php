<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
<style type="text/css">
	
	th{background-color: #FFCC99;}
	.td2{background-color: #FFC0CB;}
</style>
</head>
<body>
    <?php 
			$Class_Name="小丸子";
			$Age=18;
			$Address="桃園縣中壢市中央路15號";
		 ?>





<?php 
	print("<table border=\"1\">
	<thead style=\"color:\">好媒媒班級通訊錄</thead>
	<tbody>
	<tr>
		<th>學號</th>
		<th>姓名</th>
		<th>電話</th>
	</tr>
	<tr>
		<td>94951001</td>
		<td>黃一丁</td>
		<td>0911000333</td>
	</tr>
	<tr>
		<td>94951001</td>
		<td>劉二毛</td>
		<td>0922999887</td>
	</tr>
	<tr>
		<td>94951003</td>
		<td>張大化</td>
		<td>0933555779</td>
	</tr>
	</tbody>
		<tfoot></tfoot>
</table>");


 ?>





<?php  
	echo("
	<table border=\"1\">
		<thead>個人小檔案</thead>
		<tbody>
		<tr>
			<td class=\"td2\">姓名</td>
			<td>$Class_Name</td>
			
		</tr>
		<tr>
			<td class=\"td2\">年齡</td>
			<td>$Age</td>
			
		</tr>
		<tr>
			<td class=\"td2\">地址</td>
			<td>$Address</td>
			
		</tr>
		</tbody>
		<tfoot></tfoot>
	</table>
	");
?>
</body>
</html>