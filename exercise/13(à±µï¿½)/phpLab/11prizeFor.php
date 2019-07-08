<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		
		body {
			font-size: 18px;
		}


	</style>
</head>
<body>
	
	 <?php 
	 $total = 0;
	 $rdn = 0;
	 for ($i=1; $i<=10; $i++) {
	 	echo "第 $i 次 ";
	 	echo $rdn = mt_rand(0, 10), " 佰元 <br>";
	 	$total += $rdn;
	 } 
	 echo "<br> 總金額 : $total 佰元";
	  ?>


</body>
</html>