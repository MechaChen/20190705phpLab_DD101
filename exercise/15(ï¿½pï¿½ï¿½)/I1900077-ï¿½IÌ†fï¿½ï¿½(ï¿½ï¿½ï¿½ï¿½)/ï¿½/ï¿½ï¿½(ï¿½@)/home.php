<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
	<style>
th{
	width:200px;
}
td{
	width:200px;
	text-align:center;
}
h1{
	font-size:20px;
	text-align: center;
}
.php{
	width:600px;
	display:inline-block;
}
.button{
	padding-top:20px;
	text-align:center;
}
</style>
<body>


<table border="1">
<tr>
	<th>姓名：</th>
	<td><?php echo $_REQUEST["memName"]; ?></td>
</tr>
<tr>
	<th>帳號：</th>
	<td><?php echo $_REQUEST["memId"]; ?></td>
</tr>
<tr>
	<th>密碼：</th>
	<td><?php echo $_REQUEST["memPsw"]; ?></td>
</tr>
<tr>
	<th>e-mail：</th>
	<td><?php echo $_REQUEST["email"]; ?></tb>
</tr>
<tr>
	<th>性別：</th>
	<td><?php echo $_REQUEST["sex"]; ?></td>
</tr>
<tr>
	<th>生日：</th>
	<td><?php echo $_REQUEST["birthday"]; ?></td>
</tr>
<tr>
	<th>聯絡電話：</th>
	<td><?php echo $_REQUEST["tel"]; ?></td>
</tr>
</table>';


	
</body>
</html>