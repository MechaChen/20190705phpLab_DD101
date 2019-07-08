<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	tr,td,table{
		border:1px solid #aaaa;
		text-align: center;
	}
	td{
		width: 350px;
	}
	.mean{
		width: 200px;
		font-weight: bold;
	}
	caption{
		font-weight: bold;
		font-size: 20px;
	}

	</style>
</head>
<body>

	<?php


		echo "<table>";
		
			echo "<caption>您的會員資料為</caption><br>";
			echo "<tr><td class=\"mean\">姓名";
			echo "<td>",$_GET["name"],"</tr>";
			echo "<tr><td class=\"mean\">帳號";
			echo "<td>",$_GET["account"],"</tr>";
			echo "<tr><td class=\"mean\">密碼";
			echo "<td>",$_GET["password"],"</tr>";
			echo "<tr><td class=\"mean\">e-mail";
			echo "<td>",$_GET["mail"],"</tr>";
			echo "<tr><td class=\"mean\">性別";
			echo "<td>",$_GET["sex"],"</tr>";
			echo "<tr><td class=\"mean\">生日";
			echo "<td>",$_GET["birthday"],"</tr>";
			echo "<tr><td class=\"mean\">連絡電話";
			echo "<td>",$_GET["phone"],"</tr>";

		echo "</table>";




	?>

	
</body>
</html>