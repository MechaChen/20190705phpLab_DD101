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
    $i = 0; //次數
    $b = rand(0,10); //彩球面額
    $total = 0; //總金額

    
    while($b != 0){
        echo $b."&nbsp;&nbsp";
        $total = $total + $b;      
        $b = rand(0,10);
        $i++ ;
    }
    echo "<br>摸彩次數為：".$i."<br>","總金額為：".$total;

    

    
    // for($i=0; $i<=10; $i++){
    //     if($i != 0){
    //         $total = $total + rand(0,10);
    //     }
    //     elseif($i == 0){
    //         continue;
    //     }
        
    // }
    
    ?>
</body>
</html>