<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style type="text/css">
		.heading1 {
			font-size: 1.6em;
			color: orange;
			margin-left: 16px;
			margin-bottom: 5px;
		}
		.heading2 {
			font-size: 1.4em;
			color: deeppink;
			margin-left: 15px;
		}
		.homework1 th {
			background-color: orange;
		}
		.homework2 th {
			background-color: lightpink;
		}
		.homework2 th, 
		.homework2 td {
			padding: 5px;
		}
	</style>
	<title>Document</title>
</head>
<body>
	<?php 
	// Homework 1
		echo '<h2 class="heading1">好媒媒班級通訊</h2>';
		echo '<table border="1" class="homework1">
				<thead>
					<tr>
						<th>學號</th>
						<th>姓名</th>
						<th>電話</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>94951001</td>
						<td>黃一丁</td>
						<td>0911000333</td>
					</tr>
					<tr>
						<td>94951002</td>
						<td>劉二毛</td>
						<td>0922999887</td>
					</tr>
					<tr>
						<td>94951003</td>
						<td>張大化</td>
						<td>0933555779</td>
					</tr>
				</tbody>
			</table>';

		echo "<br><br><br><br>";

	// Homework 2
			$name = "小丸子";
			$age = "是秘密呦...";
			$address = "漫畫走廊...";

			echo '<h2 class="heading2">個人小檔案</h2>';
			echo  "<table border='1' class='homework2'>
						<tr>
							<th>姓名:</td>
							<td>$name</td>
						</tr>
						<tr>
							<th>年齡:</td>
							<td>$age</td>
						</tr>
						<tr>
							<th>地址:</td>
							<td>$address</td>
						</tr>
					</table>";
	 ?>
</body>
</html>