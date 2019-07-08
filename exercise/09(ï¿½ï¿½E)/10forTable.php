<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>
			<td>1</td>
			<td>2</td>
		</tr>
		<tr>
			<td>3</td>
			<td>4</td>
		</tr>
		<tr>
			<td>5</td>
			<td>6</td>
		</tr>
		<tr>
			<td>7</td>
			<td>8</td>
		</tr>
		<tr>
			<td>9</td>
			<td>10</td>
		</tr>

	</table>
	
<table>
<?php  
echo "<table border=1>";
	for($col=1;$col<=9;$col=$col+2){
		echo "<tr><td>$col</td><td>",$col+1,"</td></tr>";
	}
echo"</table>";
	?>

</table>;




<?php  
echo "<table border=1>";
	for($col=1;$col<=10;$col++){
		if($col%2=="1"){echo "<tr><td>$col</td>";}
		elseif($col%2=="0"){echo "<td>$col</td></tr>";}
	}


echo "</table>";
?>

</body>
</html>