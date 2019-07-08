<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$a = $_GET["memId"];
		$b = $_GET["memPsw"];
		$t = $a * $b;

		echo "小計:" , $t;
	
	?>

</body>
</html>