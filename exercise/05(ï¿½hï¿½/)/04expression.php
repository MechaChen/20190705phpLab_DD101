<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>04expression</title>
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
	    		<td><?php echo $price*$per,"元" ?></td>
	    	</tr>
    </table>
</body>
</html>