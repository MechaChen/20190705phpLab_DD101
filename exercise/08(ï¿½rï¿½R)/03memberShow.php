<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	</title>
	<style>
	th{
		width: 200px;
		text-align: center;
	}
	td{
		width: 300px;
		text-align: center;
	}
	</style>
</head>
<body>

<table border="2">
<caption>您的會員資料為</caption>
<?php
// $memName = ;
// $memId = ;
// $memPsw = ;
// $email = ;
// $sex = ;
// $birthday = ;
// $tel = ;

echo "
<tr>
	<th>姓名</th>
	<td>{$_GET["memName"]}</td>
</tr>
<tr>
	<th>帳號</th>
	<td>{$_GET["memId"]}</td>
</tr>
<tr>
	<th>密碼</th>
	<td>{$_GET["memPsw"]}</td>
</tr>
<tr>
	<th>e-mail</th>
	<td>{$_GET["email"]}</td>
</tr>
<tr>
	<th>性別</th>
	<td>{$_GET["sex"]}</td>
</tr>
<tr>
	<th>生日</th>
	<td>{$_GET["birthday"]}</td>
</tr>
<tr>
	<th>連絡電話</th>
	<td>{$_GET["tel"]}</td>
</tr>


";


?>
</table>

	
</body>
</html>