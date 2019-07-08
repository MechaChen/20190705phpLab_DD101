<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style type="text/css">
		

	td {
		width:300px;
	}

	</style>
</head>
<body>


<?php 

echo "<table align='center' border='1' cellspacing='0'>";

for( $i=1; $i<=10; $i++){
	if ($i % 2 != 0) {
		echo "<tr><td>$i</td>";
	}elseif ($i % 2 == 0) {
		echo "<td>$i</td></tr>";
	}
}

echo "</table>";

?>



	
</body>
</html>