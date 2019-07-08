<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
<style>
	div {
		display: inline-block;
		text-align: center;
	}

	.hw1_title {
		color: tomato;
		font-size: 22px;
	}

	.tb1 th {
		background-color: orange;
	}

	.hw2_title {
		color: #ff28a9;
		font-size: 22px;
	}

	.tb2 th {
		background-color: pink;
	}

	.tb2 td {
		text-align: left;
	}
	
</style>
</head>
<body>
<!-- HW2 -->
	<?php 
	// table title
	$profile = "個人小檔案";

	// table haed
	$name = "姓名：";
	$age = "年齡：";
	$address = "地址：";

	// table data
	$person = "小丸子";
	$age_ans1 = "是秘密呦...";
	$address_ans1 = "漫畫走廊...";

	printf("<br>
	<div class=\"hw2\">
		<h2 class=\"hw_title hw2_title\">$profile</h2>
		<table border=\"1\" cellpadding=\"5\" class=\"tb2\">
			<tr>
				<th>$name</th>
				<td>$person</td>
			</tr>

			<tr>
				<th>$age</th>
				<td>$age_ans1</td>
			</tr>

			<tr>
				<th>$address</th>
				<td>$address_ans1</td>
			</tr>
		</table>
	</div>")

	 ?>

</body>
</html>