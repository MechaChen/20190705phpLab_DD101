<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<style type="text/css">
		table, tr, td {border: 1px solid;}
		form {width:500px;}
		td:first-child {width:150px;}
		td+td {width: 300px;}
	</style>
</head>
<body>
	<form>
	<table>
		<tr>
			<td>單價:</td>
			<td> <?php echo $_GET["price"] ?></td></tr>
		<tr><td>數量:</td>
			<td><?php echo $_GET["volumn"] ?>
			</td></tr>
		<tr><td>小計:</td>
			<td><?php 
			$total=$_GET["price"]*$_GET["volumn"];

			if($total>=500) {
				echo $total*0.9;
			  }

			  else {echo $total;}?>
					</td></tr>
	</table>

	</form>

	
</body>
</html>