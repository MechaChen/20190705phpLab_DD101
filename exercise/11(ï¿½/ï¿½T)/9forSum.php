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
    $tatol=0;
    $odd=0;
    $even=0;
    $number=$_GET["number"];

    for($i=1;$i<=$number;$i++){
            $tatol=$tatol+$i;           
        }



    for($i=1;$i<=$number;$i++){
            if($i%2==1){
            $odd=$odd+$i;
            }
        }

    for($i=2;$i<=$number;$i++){
        if($i%2==0){
            $even=$even+$i;
            }

           
        }
        echo "{$tatol}<br>";
        echo "{$odd}<br>";
        echo "{$even}<br>";



    ?>


    
</body>
</html>