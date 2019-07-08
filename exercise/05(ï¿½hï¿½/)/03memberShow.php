<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>03memberShow</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
<style type="text/css">
	table{
		width: 425px;
		margin: 0 auto;
		text-align: center;
	}
	caption{
		font-size: 20px;
		margin-bottom: 10px; 
	}
	td{
		padding: 5px 20px;
	}
</style>
</head>
<body>
	
	<table border="1">
		<caption>會員資料</caption>
		<tr>
			<td>姓名</td>
			<td><?php echo $_REQUEST["memName"]; ?> </td>
		</tr>
		<tr>
			<td>帳號</td>
			<td><?php echo $_REQUEST["memId"]; ?></td>
		</tr>
		<tr>
			<td>密碼</td>
			<td><?php echo $_REQUEST["memPsw"]; ?></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td><?php echo $_REQUEST["email"]; ?> </td>
		</tr>
		<tr>
			<td>性別</td>
			<td><?php echo $_REQUEST["sex"]; ?></td>
		</tr>
		<tr>
			<td>生日</td>
			<td><?php echo $_REQUEST["birth"]; ?> </td>
		</tr>
		<tr>
			<td>連絡電話</td>
			<td><?php echo $_REQUEST["tel"]; ?> </td>
		</tr>
	</table>
</body>
</html>