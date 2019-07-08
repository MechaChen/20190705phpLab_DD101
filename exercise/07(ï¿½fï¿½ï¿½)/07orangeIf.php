<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">

</head>
<body>
    
<?php
$KILOMETER=$_REQUEST["KILOMETER"];
$LEVEL=$_REQUEST["LEVEL"];

if($LEVEL=="1"){
    $P_PRICE=25;
    if($KILOMETER<40)
    $P_PRICE +=5;
    if($KILOMETER>=100)
    $P_PRICE -=5;

}elseif($LEVEL=="2"){
    $P_PRICE=20;
    if($KILOMETER<40)
    $P_PRICE +=5;
    if($KILOMETER>=100)
    $P_PRICE -=5;

}elseif($LEVEL=="3"){
    $P_PRICE=15;
    if($KILOMETER<40)
    $P_PRICE +=5;
    if($KILOMETER>=100)
    $P_PRICE -=5;
 }

if($KILOMETER>=0)
echo "總價為".$P_PRICE*$KILOMETER."元";
else
echo "您輸入的值無效，請回到上一頁重新輸入";
?>

</body>
</html>