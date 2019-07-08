<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<!-- Type_1 -->
	<?php 
	$avg = 63;
	if ($avg > 60) 
		echo "Congratulations!";

	if ($avg > 70)
		echo "Wow, that's amazing!";
	?> <br>

	<!-- Type_2 -->
	<?php
	if ($avg > 60) {
		echo "Congratulations!";
		echo "You won a trophy";
	}

	if ($avg > 70) {
		echo "Wow, that's amazing!";
		echo "Fabulous";
	} ?> <br>

	<!-- Type_3 (if/else)-->
	<?php 
	if ($avg > 60) 
		echo "Congratulations!";
	else
		echo "Nice Try";

	echo "<br>";

	if ($avg > 70)
		echo "Wow,that's amazing!";
	else
		echo "Nice Try";
	 ?> <br>

	 <!-- Type_4 (if/else) -->
	 <?php 
	 if ($avg > 60) {
	 	echo "Congratulations!";
	 	echo "You won a trophy";
	} else {
		echo "Nice Try";
		echo "Keep going on";}

	if ($avg > 70) {
		echo "Congratulations";
		echo "You won a trophy";
	} else {
		echo "nice try";
		echo "Keep going";
	}
	?>	<br>

	<!-- Type_5 elseif -->
	<?php 
	$grade = 90;
	if ($grade >= 90) {
		$grade = "A";
	}	elseif ($grade >= 80) {
		$grade = "B";
	}	elseif ($grade >= 70) {
		$grade = "C";
	}	elseif ($grade >= 60) {
		$grade = "D";
	}	else {
		$grade = "E";
	}
	echo "你的成績：", "$grade";
	 ?> <br>

	 <!-- Type_6 if/if -->
	 <?php 
	 $type = "2";
	 $edu = true;
	 if ($type = "1") {
	 	$amount = 3000;
	 	if ($edu = true) {
	 		$amount += 1000;
	 	}
	 } else if ($type = "2") {
	 	$amount = 2000;
	 } else if ($type = "3") {
	 	$amount = 1000;
	 } else {
	 	$amount = 0;
	 }
	 echo "你的補助款：", "$amount";
	  ?>
</body>
</html>