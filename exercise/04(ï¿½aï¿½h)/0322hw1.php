<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style >
		td{
			padding-right: 100px; 
			text-align: center;
		}

	</style>
</head>
<body>
	<h1>申請會員</h1>
	<table  border="1">
		<tr>
			<td>姓名:</td>
			<td><?php printf("%s" , $_GET["memName"]);?></td>
		</tr>
		<tr>
			<td>帳號:</td>
			<td><?php printf("%s" , $_GET["memId"]);?></td>
		</tr>
		<tr>
			<td>密碼:</td>
			<td><?php printf("%s" , $_GET["memPsw"]);?></td>
		</tr>
		<tr>
			<td>email:</td>
			<td><?php printf("%s" , $_GET["email"]);?></td>
		</tr>
		<tr>
			<td>性別:</td>
			<td><?php printf("%s" , $_GET["sex"]);?></td>
		</tr>
		<tr>
			<td>生日:</td>
			<td><?php printf("%s" , $_GET["birthday"]);?></td>
		</tr>
		<tr>
			<td>聯絡電話:</td>
			<td><?php printf("%s" , $_GET["tel"]);?></td>
		</tr>
	</table>

</body>
</html>