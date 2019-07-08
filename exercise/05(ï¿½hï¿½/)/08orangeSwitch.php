<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>08orangeSwitch</title>
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
    	$grade=$_REQUEST["grade"];
    	$per=$_REQUEST["per"];
    	$sum=0;
     ?>

     <table border="1">
     	<caption>結果</caption>
    		<tr>
	    		<td>等級</td>
	    		<td><?php echo "{$grade}等"; ?></td>
    		</tr>
	    	<tr>
	    		<td>公斤數</td>
	    		<td><?php echo "{$per}斤"; ?></td>
	    	</tr>

	    	<?php 

	    		switch ($grade) {
	    			case 1:
	    				if ($per>=100) {
			    			$price=20;
			    			$sum=$price*$per;
			    		}elseif ($per>=40) {
			    			$price=25;
			    			$sum=$price*$per;
			    		}else {
			    			$price=30;
			    			$sum=$price*$per;
			    		}
	    				break;

	    			case 2:
	    				if ($per>=100) {
			    			$price=15;
			    			$sum=$price*$per;
			    		}elseif ($per>=40) {
			    			$price=20;
			    			$sum=$price*$per;
			    		}else {
			    			$price=25;
			    			$sum=$price*$per;
			    		}
	    				break;

	    			case 3:
	    				if ($per>=100) {
			    			$price=10;
			    			$sum=$price*$per;
			    		}elseif ($per>=40) {
			    			$price=15;
			    			$sum=$price*$per;
			    		}else {
			    			$price=20;
			    			$sum=$price*$per;
			    		}
	    				break;
	    		}
		    	
		    	echo "<tr><td>{$price}元/斤</td><td>合計{$sum}元</td></tr>";
	    	
	    	?>
    </table>
</body>
</html>