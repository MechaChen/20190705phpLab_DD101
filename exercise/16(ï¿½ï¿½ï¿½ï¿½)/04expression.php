<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>作業四:expression練習</title>
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




<table>
		<caption>總計</caption>		

	<tr>
		<td> 價格</td>
		<td> <?php echo $_GET["price"]; ?> </td>
	</tr>
<tr>
	<td> 數量</td>
	<td> <?php echo $_GET["quatity"]; ?> </td>
</tr>		

<tr>
	<td> 總價</td>
		<td> <?php echo $_GET["price"] * $_GET["quatity"]; ?> </td>
</tr>
	
	</table>


	

</body>
</html>