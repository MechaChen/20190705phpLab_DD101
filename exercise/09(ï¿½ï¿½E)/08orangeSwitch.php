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
					$level=$_GET["level"]; 
					$volumn=$_GET["volumn"];

					switch($level){
						case"1":
						if($volumn>100){
						echo $volumn*20;
							break;
						}
							elseif($volumn>40){
						echo $volumn*25;
							break;
						}
								else{echo $volumn*30;
								break;}
						case"2":
						if($volumn>100){
						echo $volumn*15;
							break;
						}
							elseif($volumn>40){
						echo $volumn*20;
							break;
						}
								else{echo $volumn*25;
								break;}
						case"3":
						if($volumn>100){
						echo $volumn*10;
							break;}
							elseif($volumn>40){
						echo $volumn*15;
							break;
						}
								else{echo $volumn*20;
								break;}
					}
	
					 ?>



				</td>
			</tr>

		</table>
	</form>
	
</body>
</html>