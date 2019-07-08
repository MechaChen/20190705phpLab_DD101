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
    $salary=$_GET["salary"];
    $amount=0;
    if($salary>10310000){
        $amount=$salary*0.45-1345100;
    }elseif($salary>4530000){
        $amount=$salary*0.3-829600;
    }elseif($salary>2420000){
        $amount=$salary*0.2-134600;
    }elseif($salary>540000){
        $amount=$salary*0.12-37800;
    }
    else{
        $amount=$salary*0.05;
    }
    $x=(int)$amount;
    echo "{$_GET["name"]}您好,您所需繳的稅額為{$x}元";

?>

    
</body>
</html>