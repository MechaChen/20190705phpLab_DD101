<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>08orangeSwitch</title>
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
	$N=$_GET["kilonumber"];
	switch ($T) {
		case '1':
			if ($N <= "40") {
				$total=$N*"30";
			}elseif ($N >= "100") {
				$total=$N*"20";
			}elseif ($N > "40") {
				$total=$N*"25";
			}
			break;
		case '2':
			if ($N <= "40") {
				$total=$N*"25";
			}elseif ($N >= "100") {
				$total=$N*"15";
			}elseif ($N > "40") {
				$total=$N*"20";
			}
			break;
		case '3':
			if ($N <= "40") {
				$total=$N*"20";
			}elseif ($N >= "100") {
				$total=$N*"10";
			}elseif ($N > "40") {
				$total=$N*"15";
			}
			break;
	}
	echo "購買的等級為{$T}<br>";
	echo "購買的公斤數為{$N}<br>";
	echo "小記:{$total}元";
?>
</body>
</html>