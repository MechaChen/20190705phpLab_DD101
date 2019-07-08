<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<center>
		<table border=2>
			<?php echo" <caption>您的會員資料為</caption>
				<tr>
					<td>姓名 : </td>
					<td>{$_GET["memName"]}</td>
				</tr>
				<tr>
					<td>帳號 : </td>
					<td>{$_GET["memId"]}</td>
				</tr>
				<tr>
					<td>密碼 : </td>
					<td>{$_GET["memPsw"]}</td>
				</tr>
				<tr>
					<td>e-mail : </td>
					<td>{$_GET["email"]}</td>
				</tr>
				<tr>
					<td>性別 : </td>
					<td>{$_GET["sex"]}</td>
				</tr>
				<tr>
					<td>生日 : </td>
					<td>{$_GET["birthday"]}</td>
				</tr>
				<tr>
					<td>連絡電話 : </td>
					<td>{$_GET["tel"]}</td>
				</tr>";
		 		?>	
		 	</table>
	</center>
</body>
</html>