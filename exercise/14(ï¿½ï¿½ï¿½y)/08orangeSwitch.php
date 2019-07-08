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
        $grade = $_GET["grade"];
        $kg = $_GET["kg"];
        $a = $kg * 30;
        $b = $kg * 25;
        $c = $kg * 20;
        $d = $kg * 15;
        $e = $kg * 10;
        
            switch($grade){
            case "1":
                if($kg <= 40){
                        
                    echo "等級:", $grade;
                    echo "小計：", $a;
                }
                elseif($kg > 40 && $kg <= 100){
                    
                    echo "等級:", $grade;
                    echo "小計：", $b;
                }
                elseif($kg > 100){
                    
                    echo "等級:", $grade;
                    echo "小計：", $c;
                }
                break;
            case "2":
                if($kg <= 40){
                        
                    echo "等級:", $grade;
                    echo "小計：", $b;
                }
                elseif($kg > 40 && $kg <= 100){
                    
                    echo "等級:", $grade;
                    echo "小計：", $c;
                }
                elseif($kg > 100){
                    
                    echo "等級:", $grade;
                    echo "小計：", $d;
                }
                break;
            case "3":
                if($kg <= 40){
                        
                    echo "等級:", $grade;
                    echo "小計：", $c;
                }
                elseif($kg > 40 && $kg <= 100){
                    
                    echo "等級:", $grade;
                    echo "小計：", $d;
                }
                elseif($kg > 100){
                    
                    echo "等級:", $grade;
                    echo "小計：", $e;
                }
                break;
            }
    
            
        
    ?>
</body>
</html>