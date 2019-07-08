<!DOCTYPE html>
<html>
<head>
	<title>homework2</title>
	<style>
	caption{
		margin: 5px;
		padding: 5px;
		font-size: 25px;
		font-weight: bold;
		color: pink;
	}
	table{
		border-collapse: collapse;
		text-align: center;
	}
	td{
		padding: 10px;
	}
	td:nth-child(1){
		background-color: pink;
		font-weight: bold;
	}
	</style>
</head>
<body>

<?php
	$name = "小丸子";
	$old = 15;
	$adr = "巷口的雜貨店";	
?>

<table border="1px">
<caption>個人小檔案</caption>
	<tr>
		<td>
	<?php
	echo "姓名:";
	?>
	</td>
	<td>
	<?php
	echo "{$name}";
	?>
	</td>
	</tr>
	<tr>
	<td>
	<?php
	echo "年齡:";
	?>
	</td>
	<td>
	<?php
	echo "{$old}";
	?>
	</td>
	</tr>
	<tr>
	<td>
	<?php
	echo "地址:";
	?>
	</td>
	<td>
	<?php
	echo "{$adr}";
	?>
	</td>
	</tr>
</table>
</body>
</html>