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
$p = $_GET["price"];
$n = $_GET["num"];

 ?>

<center>
	<table>
		<caption>計算</caption>
		<tr>
			<td>單價:</td>
			<td><?php echo $p;?></td>
		</tr>
		<tr>
			<td>數量:</td>
			<td><?php echo $n;?></td>
		</tr>
	</table>


	<p>總價:<?php 
	if($p*$n<1000){
      echo $p*$n*0.9;}
	elseif($p*$n>1000){
	  echo $p*$n*0.7;}
	 
 


		
                   ?></p>
	


</center>
</body>
</html>