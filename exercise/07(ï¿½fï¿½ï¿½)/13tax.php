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

$TEX=$_POST["TEX"];

if($TEX<=540000){
$PAY_TEX=$TEX*0.05;
}
elseif($TEX>540000 && $TEX<=1210000){
    $PAY_TEX=$TEX*0.12-37800;
}elseif($TEX>1210000 && $TEX<=2420000){
        $PAY_TEX=$TEX*0.2-134600;
    }elseif($TEX>2420000 && $TEX<=4530000){
        $PAY_TEX=$TEX*0.3-376600;
    }elseif($TEX>4530000 && $TEX<=10310000){
        $PAY_TEX=$TEX*0.4-829600;
    }elseif($TEX>10310001){
    $PAY_TEX=$TEX*0.45-1345100;
}
echo "應繳 $PAY_TEX 元"


?>

</body>
</html>