<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		form{
			margin:auto;
			width:400px;
			
		}
		table{
			width:400px;
		}
		h2{
			text-align: center;
		}
	</style>
</head>
<body>
	<form>
		<h2>橘子計價</h2>
		<table border 2px>
			<tr>
				<td>單價:</td>
				<td><?php echo $_REQUEST["price"] ?>元</td>
			</tr>
			<tr>
				<td>數量:</td>
				<td><?php echo $_REQUEST["quantity"] ?>元</td>
			</tr>
			<tr>
				<td>總計:</td>
				<td><?php echo  $_REQUEST["price"]*$_REQUEST["quantity"] ?>元</td>
			</tr>
		</table>
		<div>
		
		</div>
</body>
</html>