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
        $num=$_REQUEST["num"];
        $i=0;
        $total=0;
        $odd=0;
        $even=0;


        for($i=1;$i<=$num;$i++){
            $total+=$i;
        }
        for($i=1;$i<=$num;$i++){
            if($i%2==1){
                $odd+=$i;
            }
        }
        for($i=1;$i<=$num;$i++){
            if($i%2==0){
                $even+=$i;
            }
        }
        // ----下面去頭尾
        // for($i=2;$i<$num;$i++){
        //     $total+=$i;
        // }
        // for($i=2;$i<$num;$i++){
        //     if($i%2==1){
        //         $odd+=$i;
        //     }
        // }
        // for($i=2;$i<$num;$i++){
        //     if($i%2==0){
        //         $even+=$i;
        //     }
        // }
        echo "總數和: $total<br>";
        echo "奇數和: $odd<br>";
        echo "偶數和: $even<br>";
    ?>
</body>
</html>