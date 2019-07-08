<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>作業三:表單欄位變數練習</title>
	<style type="text/css">
		table{
			border: 1px solid grey;
			width: 30%;
			margin: 0 auto;
		}


		td{
			border: 1px solid grey;
		}


	</style>


</head>
<body>


<?php 

		$name="姓名";
		$id="賬號";
		$psw="密碼";
		$email="e-mail";
		$sex="性別";
		$birth="生日";
		$tel="聯絡電話";

echo"

<table>
		<caption>您的會員資料為</caption>		

	<tr>
		<td> $name </td>
		<td> {$_GET["memName"]} </td>
	</tr>

	<tr>
		<td> $id</td>
		<td> {$_GET["memId"]} </td>
	</tr>

	<tr>
		<td> $psw</td>
		<td> {$_GET["memPsw"]}</td>
	</tr>

	<tr>
		<td> $email</td>
		<td>{$_GET["email"]} </td>
	</tr>

	<tr>
		<td> $sex</td>
	<td> {$_GET["sex"]} </td>
	</tr>

	<tr>
		<td>$birth</td>
		<td> {$_GET["birthday"]} </td>
	</tr>


	<tr>
		<td>  $tel</td>
		<td> {$_GET["tel"]} </td>
	</tr>

	</table>";

?>
	

</body>
</html>