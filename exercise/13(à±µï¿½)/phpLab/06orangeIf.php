<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	$total = $_POST["sum"] * $_POST["unitPrice"];

	if ($total >= 1000) {
		echo "小計 : ", $total * 0.7, "元", "<br>", "消費金額超過500元，已打七折" ;
	} elseif ( $total >= 500) {
		echo "小計 : ", $total * 0.9, "元", "<br>", "消費金額超過1000元，已打九折" ;
	} else {
		echo "小計 : ", $total, "元";
	}

	 ?>
</body>
</html>