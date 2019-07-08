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
    $price = 0;
    $num = $_REQUEST["num"];
    $level = $_REQUEST["level"];
    $total = 0;
    if($level==1){
        if($num>100){
            $price=20;
        }elseif($num>40){
            $price=25;
        }elseif($num<=40){
            $price=30;
        }
    }elseif($level==2){
        if($num>100){
            $price=15;
        }elseif($num>40){
            $price=20;
        }elseif($num<=40){
            $price=25;
        }
    }elseif($level==3){
        if($num>100){
            $price=10;
        }elseif($num>40){
            $price=15;
        }elseif($num<=40){
            $price=20;
        }

    }
    $total=$num*$price;
    echo "小記: $total 元";
    ?>
    </body>
    </html>