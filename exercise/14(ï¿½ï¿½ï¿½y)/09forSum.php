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
        $i = $_GET["num"];
        $total = 0;
        $even = 0;
        $odd = 0;

        for($i=1; $i<=$_GET["num"]; $i++){
            $total = $total + $i;
        }

        for($i=1; $i<=$_GET["num"]; $i++){
            if($i % 2 == 0){
                $even = $even + $i;
            }
        }

        for($i=1; $i<=$_GET["num"]; $i++){
            if($i % 2 == 1){
                $odd = $odd + $i;
            }
        }

        echo "總和：",$total, "<br>", "偶數和：",$even, "<br>", "奇數和：",$odd;

        

            
    
            
        
    ?>
</body>
</html>