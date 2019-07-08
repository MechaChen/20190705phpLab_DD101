<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
<style type="text/css">
h2 {
	color:deeppink;
}	
td {
	width:90px;
	text-align:center;
}
</style>
</head>
<body>

<h2>印9 列 1 2 3...9</h2>	
<?php
for( $i=1; $i<=9; $i++){
	for( $j=1; $j <= 9; $j++){
		echo $j, " ";
	}
	echo "<br>";
}

?>


<h2>9X9</h2>	
<?php 
echo "<table border='1' cellspacing='0' align='center'>";
for( $i=1; $i<=9; $i++){
	echo "<tr>";
	for( $j=1; $j <= 9; $j++){
		echo "<td>$i*$j=",$i*$j, "</td>";
	}	
	echo "</tr>";
}
echo "</table>";
?>
</body>
</html>