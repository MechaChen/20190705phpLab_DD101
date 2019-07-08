<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
	 td + td {
	 	width:400px;
	 }
	
	form {
		margin:auto;
		width: 496px;
	}
	p, .button {
		text-align: center;
	}

		table,tr,td {
			border:1px solid;
		}


	</style>
</head>
<body>


<table>
		<p>計價</p>
		<tr>
			<td>單價：</td>
			<td><?php echo $_REQUEST["price"]?></td>
		</tr>
		<tr>
			<td>數量：</td>
			<td><?php echo $_REQUEST["volumn"]?></td>
		</tr>
		<tr>
			<td>小計：</td>
			<td> <?php echo $_REQUEST["price"]*$_REQUEST["volumn"]?></td>
		</tr>
	</table>

	<div class=button>
</div>
</form>"

</body>
</html>