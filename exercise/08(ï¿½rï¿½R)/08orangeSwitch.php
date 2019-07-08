<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	</title>
	<style type="text/css">
		caption{
			padding-bottom: 10px;
		}
		th{
			width: 150px;
			text-align: center;
		}
		td{
			width: 300px;
			text-align: center;
		}
	</style>
</head>
<body>

<?php
if(isset($_GET["submit"])){
	$level = $_GET["level"];
}
$kg = $_GET["kg"];
$price = 0;
$total = 0;

switch ($level) {
    case "1":
    if($kg > 100){
        $price = 20;
    } elseif($kg > 40){
        $price = 25;
    } else {
        $price = 30;
    }
    break;
    
    case "2":
    if($kg > 100){
        $price = 15;
    } elseif($kg > 40){
        $price = 20;
    } else {
        $price = 25;
    }
    break;
    
    case "3":
    if($kg > 100){
        $price = 10;
    } elseif($kg > 40){
        $price = 15;
    } else {
        $price = 20;
    }
    break;
    
    default :
    $price = 0;
}


$total = $price * $kg;
?>

<table border="2">
<caption>總計</caption>
<tr>
	<th>等級</th>
	<th>
		<?php echo $level; ?>
	</th>
</tr>
<tr>
	<th>公斤數</th>
	<td>
		<?php echo $kg,"元"; ?>
	</td>
</tr>
<tr>
	<th>總計</th>
	<td>
		<?php echo $total,"元"; ?>
	</td>
</tr>
</table>

	
</body>



</html>