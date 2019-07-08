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
        $income = $_GET["income"];
        $t = 0;

        if( $income <= 540000 ){
            $t = $income * 0.05;
        }
        elseif( $income > 540000 && $income <= 1210000 ){
            $t = $income * 0.12 - 37800;
        }
        elseif( $income > 1210000 && $income <= 2420000 ){
            $t = $income * 0.2 - 134600;
        }
        elseif( $income > 2420000 && $income <= 4530000 ){
            $t = $income * 0.3 - 376600;
        }
        elseif( $income > 4530000 && $income <= 10310000 ){
            $t = $income * 0.4 - 829600;
        }
        elseif( $income > 10310000 ){
            $t = $income * 0.45 - 1345100;
        }

        echo  "應納稅額：", $t;
    ?>
</body>
</html>