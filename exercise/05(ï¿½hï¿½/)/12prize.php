<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>12prize</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">

</head>
<body>
	<h3>有11顆彩球, 彩球面額為0-10之間, 若摸到的彩球不為0,則可繼續摸彩,若摸到的彩球為0,則停止摸彩,並計算其摸彩次數及彩金總金額(單位:佰元)</h3>


    <?php 
    	
    	$temp=0;
    	$total=0;
    	$i=0;
    	do{
    		$i=1+$i;
    		$temp=rand(0,10);
    		echo "第{$i}次：{$temp}<br>";
    		$total += $temp;
    	}while($temp!=0);

    	echo "總共摸彩{$i}次，獲得彩金總金額為",$total*100,"元";




     ?>
</body>
</html>