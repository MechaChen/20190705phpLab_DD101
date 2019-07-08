<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>11prizeFor</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">

</head>
<body>
	<h3>摸彩10次, 印出其每次的摸彩金額及彩金總金額(單位:佰元)</h3>	
    <?php 
    	
    	$temp=0;
    	$total=0;

    	for ($i=1; $i <= 10; $i++) { 
    		$temp= rand(0,10);
    		echo "第{$i}次：&nbsp;{$temp}<br>";
    		$total += $temp;
    	}
    	echo "<hr>恭喜你獲得彩金", $total*100,"元";





     ?>
</body>
</html>