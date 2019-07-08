<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	 <!-- Type_6 if/if -->
	 <?php 
	 $type = "5";
	 $edu = false;
	 if ($type == "1") {
	 	$amount = 3000;
	 	if ($edu == true) {
	 		$amount += 1000;
	 	}
	 } else if ($type == "2") {
	 	$amount = 2000;
	 } else if ($type == "3") {
	 	$amount = 1000;
	 } else {
	 	$amount = 0;
	 }
	 echo "你的補助款：", "$amount";
	  ?>
</body>
</html>