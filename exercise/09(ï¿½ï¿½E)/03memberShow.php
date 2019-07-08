<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<style type="text/css">
		
		table, tr,td { 
		border:1px solid #333;
	 }
	 tr, td {
	 	width:250px;
	 	text-align: center;
	 }
	</style>
</head>
<body>
	



<table>
	<thead>您的會員資料為</thead>
	<tr>
		<td>姓名</td>
		<td><?php echo $_REQUEST["memName"]?></td>
	</tr>
	<tr>
		<td>帳號</td>
		<td><?php echo $_REQUEST["account"]?></td>
	</tr>
	<tr>
		<td>密碼</td>
		<td><?php echo $_REQUEST["password"]?></td>
	</tr>
	<tr>
		<td>e-mail</td>
		<td><?php echo $_REQUEST["email"]?></td>
	</tr>
	<tr>
		<td>性別</td>
		<td><?php echo $_REQUEST["gender"]?></td>
	</tr>
	<tr>
		<td>生日</td>
		<td><?php echo $_REQUEST["birthday"]?></td>
	</tr>
	<tr>
		<td>連絡電話</td>
		<td><?php echo $_REQUEST["tel"]?></td>
	</tr>

</table>








</body>
</html>