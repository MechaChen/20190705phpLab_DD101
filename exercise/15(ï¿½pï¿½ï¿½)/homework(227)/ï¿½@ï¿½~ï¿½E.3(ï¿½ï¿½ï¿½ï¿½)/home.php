<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php 

$total＝0;
$level=$_REQUEST["level"];

for($t=1;$level>=$t;$t++){
	if($t % 2 == 0)
   $total = $total+$t;
	}

echo "總合：",$total;

// if($level + $total )

?>
</body>
</html>