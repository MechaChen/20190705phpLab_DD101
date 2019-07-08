<!DOCTYPE html>
<html>
<head>
	<title></title>


<style type="text/css">
	td{
		width: 100px;
		border: 1px solid #000;
	}
</style>

</head>
<body>





<?php 




echo "<table align='center' cellspacing='0'>";
for( $i=1; $i<=10; $i+=2){
	$A=$i+1;
	echo "<tr>
			<td>$i</td>
			<td>$A</td>

			</tr>";
}
echo "</table>";
?>




</body>
</html>