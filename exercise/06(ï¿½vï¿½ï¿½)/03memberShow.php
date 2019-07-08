<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<center>
<caption>您的會員資料為</caption>
 <table border="1">
			<tr>
				<td>姓名：</td>
				<td><?php echo $_POST["txtName"],"<br>"; ?></td>
			</tr>
			<tr>
				<td>帳號：</td>
				<td><?php echo $_POST["txtId"],"<br>"; ?></td>
			</tr>
			<tr>
				<td>密碼：</td>
				<td><?php echo $_POST["txtPsw"],"<br>"; ?></td>
			</tr>
			<tr>
				<td>e-mail：</td>
				<td><?php echo $_POST["txtEmail"],"<br>"; ?></td>
			</tr>
			<tr>
				<td>性別：</td>
				<td><?php echo $_POST["radGender"],"<br>"; ?></td>
			</tr>
			<tr>
				<td>生日：</td>
				<td><?php echo $_POST["txtDate"],"<br>"; ?></td>
			</tr>
			<tr>
				<td>連絡電話：</td>
				<td><?php echo $_POST["txtTel"],"<br>"; ?></td>
			</tr>

		</table>
</center>


</body>
</html>