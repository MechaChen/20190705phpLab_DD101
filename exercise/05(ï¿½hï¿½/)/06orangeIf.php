<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>06orangeIf</title>
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
    	$price=$_REQUEST["price"];
    	$per=$_REQUEST["per"];
    	$sum=$price*$per;
     ?>

     <table border="1">
     	<caption>結果</caption>
    		<tr>
	    		<td>單價</td>
	    		<td><?php echo $price; ?></td>
    		</tr>
	    	<tr>
	    		<td>數量</td>
	    		<td><?php echo $per; ?></td>
	    	</tr>

	    	<tr>
	    		<td>合計</td>
	    		<td><?php echo "{$sum}元" ?></td>
	    	</tr>
	    	<?php 
		    	if ($sum>=1000){
		    		echo "<tr><td>滿1000元打7折</td><td>",$sum*0.7,"元</td></tr>";
		    	}elseif ($sum>=500){
		    		echo "<tr><td>滿500元打9折</td><td>",$sum*0.9,"元</td></tr>";
		    	}
	    	
	    	?>
    </table>
</body>
</html>