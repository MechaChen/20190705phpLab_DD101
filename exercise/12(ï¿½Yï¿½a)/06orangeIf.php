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
				<td><?php echo $_REQUEST["quantity"] ?></td>
			</tr>
			<tr>
				<td>總計:</td>
				<td><?php
				$total=$_REQUEST["price"]*$_REQUEST["quantity"] ;
				if($total>1000)
					$total*=0.7;
				elseif($total>500)
					$total*=0.9;
				echo "$total 元";
				?>

				</td>
			</tr>
		</table>
	</form>
</body>
</html>