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
$l = $_GET["level"];
$n = $_GET["num"];

 ?>

<center>
	<table>
		<caption>計算</caption>
		<tr>
			<td>等級:</td>
			<td><?php echo $l;?></td>
		</tr>
		<tr>
			<td>公斤數:</td>
			<td><?php echo $n;?></td>
		</tr>
	</table>


	<p>總價:<?php 
		switch ($l){
			case "1" :
				if($n<40){echo $n*30;}
				elseif ($n>=40 && $n<=99) {echo $n*25;}
				elseif ($n>=100) {echo $n*20;}
				break;
			case "2" :
				if($n<40){echo $n*25;}
    			elseif ($n>=40 && $n<=99) {echo $n*20;}
    			elseif ($n>=100) {echo $n*15;}
    			break;
    		case "3" :
    			if($n<40){echo $n*20;}
    			elseif ($n>=40 && $n<=99) {echo $n*15;}
    			elseif ($n>=100) {echo $n*10;}
    			break;
    		default :
    		    echo "等級太低,我們不賣這種爛水果";
    		}

    	?></p>
	


</center>
</body>
</html>