<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		form{
			margin:auto;
			width:400px;
			
		}
		table{
			width:400px;
		}
		h3{
			text-align: center;
		}
	</style>
</head>
<body>
	<form >
		<h3>計算1到此整數間的總和、奇數和、偶數和</h3>
		<table border 2px>
			<tr>
				<td>正整數:</td>
				<td><?php echo $_REQUEST["pstI"] ?></td>
			</tr>
			<tr>
				<td>總和:</td>
				<td><?php 
				$pstI=$_REQUEST["pstI"];
				$total=0;
				for($I=1 ;$I<=$pstI ;$I++){
					$total += $I;
				}
					echo "$total";
				 ?></td>
			</tr>
			<tr>
				<td>奇數和:</td>
				<td><?php 
				$pstI=$_REQUEST["pstI"];
				$odd=0;
				for($I=1 ;$I<= $pstI ;$I=$I+2){
					$odd += $I;
				}
					echo " $odd";
				?></td>
			</tr>
			<tr>
				<td>偶數和:</td>
				<td><?php 
				$pstI=$_REQUEST["pstI"];
				$even=0;
				for($I=2 ;$I <= $pstI ;$I=$I+2){
					$even += $pstI;
				}
					echo " $even";
				?></td>
			</tr>
		</table>
	</form>
</body>
</html>