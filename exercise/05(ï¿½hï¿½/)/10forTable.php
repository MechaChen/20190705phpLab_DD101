<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>10forTable</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
<style type="text/css">
	table{
		width: 425px;
		margin: 0 auto;
		text-align: center;
		border: 1px solid #000;
	}
	caption{
		font-size: 20px;
		margin-bottom: 10px; 
	}
	td{
		padding: 5px 20px;
		border: 1px solid #000;
	}

</style>
</head>
<body>

	
    <?php 
    	
    	$x=0;
    	echo"<table>";

    		for($i=1; $i<=5 ;$i++){
    			echo "<tr>";
    			for ($a=1; $a <=2 ; $a++) {     				   				
    				$x=$x+1;
    				echo "<td>$x</td>"; 
    			}
    			echo "</tr>";
    		}
    	echo "</table>";





     ?>
</body>
</html>