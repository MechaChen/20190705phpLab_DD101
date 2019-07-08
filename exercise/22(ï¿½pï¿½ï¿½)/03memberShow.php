<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>03memberShow</title>
</head>
<body>
	<?php
	echo" <table border=\"2\">
		<caption>您的會員資料為</caption>
		<tr>
			<td>姓名</td>
			<td>{$_REQUEST["memName"]}</td>
		</tr>
		<tr>
			<td>帳號</td>
			<td>{$_REQUEST["memId"]}</td>
		</tr>
		<tr>
			<td>密碼</td>
			<td>{$_REQUEST["memPsW"]}</td>
		</tr>
		<tr>
			<td>e-mail</td>
			<td>{$_REQUEST["memEmail"]}</td>
		</tr>
		<tr>
			<td>性別</td>
			<td>{$_REQUEST["memGender"]}</td>
		</tr>
		<tr>
			<td>生日</td>
			<td>{$_REQUEST["memBirth"]}</td>
		</tr>
		<tr>
			<td>聯絡電話</td>
			<td>{$_REQUEST["memTel"]}</td>
		</tr>
	</table>" ;
	?>

</body>
</html>