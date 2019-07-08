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
    $i=0;
    $times=0;
    $money=0;
    echo "摸彩金:";
    do{
        $i=rand(0,10);
        echo $i."&nbsp;&nbsp";
        $money+=$i*100;
        $times++;
    }while($i!=0);
    echo "<br>總次數:".$times;
    echo "<br>總金額:".$money;
    ?>
</body>
</html>