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
// $n = $_GET["num"];

 ?>


	<table>
		<caption>計算結果</caption>
		<tr>
			<td>輸入數字:</td>
			<td><?php echo $l;?></td>
		</tr>	
	</table>


	<?php 
	$tol=0;
	for($a=1;$a<=$l;$a++)
	{$tol = $tol + $a;}
	echo "總和: $tol<br>";


    $tol=0;
    for($a=1; $a<=$l; $a = $a + 2 )
    	{$tol = $tol + $a;}
    echo "奇數總和: $tol<br>";

    $tol=0;
    for($a=2; $a<=$l; $a = $a + 2 )
    	{$tol = $tol + $a;}
    echo "偶數總和: $tol<br>";

	?>

	


	

</body>
</html>