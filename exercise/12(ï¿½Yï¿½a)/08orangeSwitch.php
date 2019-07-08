<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		form{
			margin:auto;
			width:400px;
			
		}
		table{
			width:400px;
		}
		h2{
			text-align: center;
		}
	</style>
</head>
<body>
		<form>
		<h2>橘子計價</h2>
		<table border 2px>
			<tr>
				<td>等級:</td>
				<td><?php echo $_REQUEST["grade"] ?>等級</td>
			</tr>
			<tr>
				<td>公斤:</td>
				<td><?php echo $_REQUEST["kg"] ?>公斤</td>
			</tr>
			<tr>
				<td>總計:</td>
				<td>
				<?php
				$grade = $_REQUEST["grade"];
				$kg = $_REQUEST["kg"];
				switch($grade){
					case "1":
					  if($kg < 40){
						$kg *=30;
					  }elseif($kg>40 && $kg<99){
						$kg *=25;
					  }elseif($kg > 100){
						$kg *=20;
					  }break;

					case "2":
					  if($kg<40){
						$kg *=25;
					  }elseif($kg>40 && $kg<99 ){
						$kg *=20;
					  }elseif($kg>100){
						$kg *=15;
					  }break;

					case "3":
					  if($kg<40){
						$kg *=20;
					  }elseif($kg>40 && $kg<99){
						$kg *=15;
					  }elseif($kg>100){
						$kg *=10;
					  }break;
				}echo" $kg 元";
				?>
				</td>
			</tr>
		</table>

	</form>
</body>
</html>