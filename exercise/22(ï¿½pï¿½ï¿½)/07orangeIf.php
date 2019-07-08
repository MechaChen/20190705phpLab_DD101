<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>07orangeIf</title>
</head>
<body>
	<?php 
	echo "<table border=\"1\">
		<tr>
			<th>等級</th>
			<th>40公斤以內</th>
			<th>超出40公斤</th>
			<th>超出100公斤</th>
		</tr>
		<tr>
			<td>1</td>
			<td>30元/公斤</td>
			<td>25元/公斤</td>
			<td>20元/公斤</td>
		</tr>
		<tr>
			<td>2</td>
			<td>25元/公斤</td>
			<td>20元/公斤</td>
			<td>15元/公斤</td>
		</tr>
		<tr>
			<td>3</td>
			<td>20元/公斤</td>
			<td>15元/公斤</td>
			<td>10元/公斤</td>
		</tr> 
		</table>";
		?>
	
<?php 
	$T=$_GET["type"];
	$K=$_GET["kilo"];
	if ($T == "1") {
		if ($K <= "40") {
			$total=$K*"30";
		}elseif ($K >= "100") {
			$total=$K*"20";
		}elseif ($K > "40") {
			$total=$K*"25";
		}
	}elseif ($T == "2") {
		if ($K <= "40") {
			$total=$K*"25";
		}elseif ($K >= "100") {
			$total=$K*"15";
		}elseif ($K > "40") {
			$total=$K*"20";
		}
	}elseif ($T == "3") {
		if ($K <= "40") {
			$total=$K*"20";
		}elseif ($K >= "100") {
			$total=$K*"10";
		}elseif ($K > "40") {
			$total=$K*"15";
		}
	}
	echo "購買的等級為{$T}<br>";
	echo "購買的公斤數為{$K}<br>";
	echo "小記:{$total}元";

?>
</body>
</html>