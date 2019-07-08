<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $i=1;
    $money=0;
    $sum=0;
    echo "每次的摸彩金額:";
    for($i=1;$i<=10;$i++){
        $money=rand(0,10)."&nbsp;&nbsp";
        echo $money;
        $sum+=$money*100;
    }
    echo "<br>";
    echo "彩金總金額:".$sum;
?>
</body>
</html>