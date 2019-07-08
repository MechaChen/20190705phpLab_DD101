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
        $a = $_GET["price"];
        $b = $_GET["amount"];
        $total = $a * $b;
        if($total >= 500){
            echo "小計：",$total * 0.9;
        }else{
            echo "小計：",$total;
        }
        
    ?>
</body>
</html>