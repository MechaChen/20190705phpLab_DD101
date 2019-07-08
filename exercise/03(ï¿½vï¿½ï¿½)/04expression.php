<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<center>
		<table border=2>
			 <caption>計價</caption>
				<tr>
					<td>單價 : </td>
					<td><?php echo"{$_GET["price"]}";?></td>
				</tr>
				<tr>
					<td>數量 : </td>
					<td><?php echo"{$_GET["quantity"]}";?></td>
				</tr>
				<tr>
					<td>小計 : </td>
					<td><?php echo $_GET["price"]*$_GET["quantity"];?></td>
				</tr>
		 			
		 	</table>
	</center>
</body>
</html>