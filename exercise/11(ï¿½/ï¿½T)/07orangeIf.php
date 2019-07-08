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
    $price=0;
    $tatol=0;
    $number=$_GET["number"];
    $level=$_GET["level"];

    if($level==1){
        if($number<40){
            $price=30;
        }
        elseif($number>40){
            $price=25;
        }
        else{
            $price=20;
        }
    }
    elseif($level==2){
        if($number<40){
            $price=25;
        }
        elseif($number>40){
            $price=20;
        }
        else{
            $price=15;
        }
    }
    elseif($level==3){
        if($number<40){
            $price=20;
        }
        elseif($number>40){
            $price=15;
        }
        else{
            $price=10;
        }
    }

    echo "總價",$tatol=$price*$number;




    ?>
</body>
</html>