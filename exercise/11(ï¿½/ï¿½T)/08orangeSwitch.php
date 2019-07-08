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
        
        switch($level){
            case"1":
                if($number>100){
                    $price=20;
                }
                elseif($number>40){
                    $price=25;
                }
                else{
                    $price=30;
                }

                break;
            case"2":
                if($number>100){
                    $price=15;
                }
                elseif($number>40){
                    $price=20;
                }
                else{
                    $price=25;
                }

                break;
            case"3":
                if($number>100){
                    $price=10;
                }
                elseif($number>40){
                    $price=15;
                }
                else{
                    $price=20;
                }
                break;
            default;
            $price=0;

            }
        echo $tatol=$price*$number;

    ?>
    
</body>
</html>