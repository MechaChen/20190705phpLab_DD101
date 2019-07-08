<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>09forSum</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
<style type="text/css">
	table{
		width: 425px;
		margin: 0 auto;
		text-align: center;
	}
	caption{
		font-size: 20px;
		margin-bottom: 10px; 
	}
	td{
		padding: 5px 20px;
	}
</style>
</head>
<body>
    <?php 
    	$int=$_REQUEST["int"];
    	$sum=0;
    	$odd=0;
    	$even=0;

    	for ($i=0; $i <= $int ; $i++) { 
    		$sum= $sum + $i;
    	}

    	for ($a=1; $a <= $int ; $a= $a+2){
    		$odd = $odd + $a;
    	}

    	for ($b=2; $b <= $int ; $b= $b+2){
    		$even = $even + $b;
    	}
    	

     ?>

     <table border="1">
     	<caption>結果</caption>
    		<tr>
	    		<td>1到<?php echo "{$int}的總和"; ?></td>
	    		<td><?php echo $sum; ?></td>
    		</tr>
	    	<tr>
	    		<td>1到<?php echo "{$int}的奇數和"; ?></td>
	    		<td><?php echo $odd; ?></td>
	    	</tr>
	    	<tr>
	    		<td>1到<?php echo "{$int}的偶數和"; ?></td>
	    		<td><?php echo $even; ?></td>
	    	</tr>
    </table>
</body>
</html>