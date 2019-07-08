<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>homework expression</title>
	<style>
		table {
			border-collapse: collapse;
			width: 600px;
		}

		td {
			border: 1px solid #000;
			padding: 5px 0px 5px;

		}

		tr:nth-child(even) {
			background-color: #e8e8e8;
		}

		caption {
			font-size: 40px;
		}
		
	</style>
</head>
<body>
<?php 
$m = $_GET["money"];
$n = $_GET["num"];

 ?>
	<table>
		<caption>計算</caption>
		<tr>
			<td>所得</td>
			<td><?php echo $m;?></td>
		</tr>
	</table>


	<p>應繳稅金:<?php 
	if($m > 10310000){
		echo $m*0.45-1345100;
	}
		elseif($m>4530000 && $m<=10310000){
			echo $m*0.4-829600;
		}
		elseif($m>2420000 && $m <=4530000){
			echo $m*0.3-376600;
		}
		elseif($m>1210000 && $m<=2420000){
			echo $m*0.2-134600;
		}
		elseif($m>540000 && $m<=1210000){
			echo $m*0.12-37800;
		}
		elseif($m>0 && $m<=540000){
			echo $m*0.05;

		}
    	?></p>
</body>
</html>