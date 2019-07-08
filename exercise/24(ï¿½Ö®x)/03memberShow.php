<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>memberShow</title>
	<style type="text/css">
		table{
			width: 500px;
			margin: 10px auto;
		}
		
		caption{
			margin-bottom: 10px;
		}

		.memberShow, .memberShow td{
			border: 1px solid #888;
			text-align: center;
		}

		.first_col{
			width: 200px;
		}

		.second_col{
			width: 300px;
		}
	</style>
</head>
<body>
	<?php 
		echo "
		<table class=\"memberShow\">
			<caption>您的會員資料為</caption>
			<tr>
				<td class=\"first_col\">姓名</td>
				<td class=\"second_col\">{$_GET["memName"]}</td>
			</tr>
			<tr>
				<td>帳號</td>
				<td>{$_GET["memId"]}</td>
			</tr>
			<tr>
				<td>密碼</td>
				<td>{$_GET["memPsw"]}</td>
			</tr>
			<tr>
				<td>e-mail</td>
				<td>{$_GET["email"]}</td>
			</tr>
			<tr>
				<td>性別</td>
				<td>{$_GET["sex"]}</td>
			</tr>
			<tr>
				<td>生日</td>
				<td>{$_GET["birthday"]}</td>
			</tr>
			<tr>
				<td>聯絡電話</td>
				<td>{$_GET["tel"]}</td>
			</tr>
		</table>
		";
	?>
</body>
</html>