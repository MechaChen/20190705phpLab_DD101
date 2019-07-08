<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
	body{
		font-size: 50px;
		text-align: center;
	}
</style>
<body>
	小計: <?php
	printf("%s" , $_GET["price"] * $_GET["number"]);
	?>
</body>
</html>