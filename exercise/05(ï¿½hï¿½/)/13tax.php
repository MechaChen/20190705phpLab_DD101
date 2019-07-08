<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>13tax</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">

</head>
<body>
	
    <?php 
    	
    	$money=$_REQUEST["money"];
        $result=0;
        if ($money>=0 && $money<=540000) {
            $result=$money*0.05 - 0;
        }elseif ($money>=540001 && $money<=1210000) {
            $result=$money*0.12 - 37800;
        }elseif ($money>=1210001 && $money<=2420000) {
            $result=$money*0.2 - 134600;
        }elseif ($money>=2420001 && $money<=4530000) {
            $result=$money*0.3 - 376600;
        }elseif ($money>=4530001 && $money<=10310000) {
            $result=$money*0.4 - 829600;
        }elseif ($money>=10310000) {
            $result=$money*0.45 - 1345100;
        }

        echo "應繳稅額為{$result}元";


     ?>
</body>
</html>