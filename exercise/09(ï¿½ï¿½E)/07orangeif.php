<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<style type="text/css">
		table,tr,td {
			border:1px solid;
		}
	</style>
</head>
<body>
		<form>
		<table>
			<tr>
				<td>等級:</td>
				<td><?php echo $_GET["level"] ?></td>
			</tr>
			<tr>
				<td>公斤數:</td>
				<td><?php echo $_GET["volumn"] ?></td>
			</tr>
			<tr>
				<td>小計:</td>
				<td>
				<?php 
				$level=$_GET["level"]; $volumn=$_GET["volumn"]; 
				if($level=="1" & $volumn>"100"){echo $_GET["volumn"]*20;}
					elseif($level=="1" & $volumn>"40"){echo $_GET["volumn"]*25;}
						elseif($level=="1" & $volumn<="40"){echo $_GET["volumn"]*30;}

				if($level=="2" & $volumn>"100"){echo $_GET["volumn"]*15;}
					elseif($level=="2" & $volumn>"40"){echo $_GET["volumn"]*20;}
						elseif($level=="2" & $volumn<="40"){echo $_GET["volumn"]*25;}
				if($level=="3" & $volumn>"100"){echo $_GET["volumn"]*10;}
					elseif($level=="3" & $volumn>"40"){echo $_GET["volumn"]*15;}
						elseif($level=="3" & $volumn<="40"){echo $_GET["volumn"]*20;}
				
				
				

				 ?>





















				</td>
			</tr>

		</table>
	</form>
	
</body>
</html>