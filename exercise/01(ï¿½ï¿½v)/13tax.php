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
        $money=$_REQUEST["money"];
        $final=0;
        if($money>10310001){
            $final=$money*0.45-1345100;
        }elseif(10310001>$money && $money>4530000){
            $final=$money*0.4-829600;
        }elseif(4530001>$money && $money>2420000){
            $final=$money*0.3-376600;
        }elseif(2420001>$money && $money>1210000){
            $final=$money*0.2-134600;
        }elseif(1210001>$money && $money>540000){
            $final=$money*0.12-37800;
        }else{
            $final=$money*0.5;    
        }
        echo "應繳稅金:".$final."圓";
    ?>
</body>
</html>