<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>homework</title>
<style>
	caption{
		font-size: 21px;
		color: red;
	}
	th{
		background-color: orange;
	}
	.information caption{
		font-size: 21px;
		color: Magenta;
	}
	.information th{
		background-color: #ffcccc;
	}
</style>
</head>
<body>
		<table border="2">
		<caption>好媒媒班級通訊錄</caption>
		<?php
		$name1 = "黃一丁";
		$name2 = "劉二毛";
		$name3 = "張大化";
		$number1 = "94951001";
		$number2 = "94951002";
		$number3 = "94951003";
		$phone1 = "0911000333";
		$phone2 = "0922999887";
		$phone3 = "0933555779";


		echo "
		<tr>
			<th>學號</th>
			<th>姓名</th>
			<th>電話</th>
		</tr>
		<tr>
			<td>$number1</td>
			<td>$name1</td>
			<td>$phone1</td>
		</tr>
		<tr>
			<td>$number2</td>
			<td>$name2</td>
			<td>$phone2</td>
		</tr>
		<tr>
			<td>$number3</td>
			<td>$name3</td>
			<td>$phone3</td>
		</tr>"
	
		?>

		</table>

		<table class="information" border="2">

			<caption>個人小檔案</caption>
			<?php
			$name = "小丸子";
			$age = "是秘密呦...";
			$address = "漫畫走廊...";

			echo "
			<tr>
				<th>姓名:</th>
				<td>$name</td>
			</tr>
			<tr>
				<th>年齡:</th>
				<td>$age</td>
			</tr>
			<tr>
				<th>地址:</th>
				<td>$address</td>
			</tr>"	
			
			?>


			
		</table>
	

	
</body>
</html>