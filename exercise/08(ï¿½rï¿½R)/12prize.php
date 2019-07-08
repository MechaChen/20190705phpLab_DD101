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
$i=0;
$total=0;
do{
$a=mt_rand(0,10);
$i+=1;
$total+=$a;
}while($a != 0);

echo "次數",$i;
echo "彩金總金額 :", $total*100,"<br>";
?>

    
</body>
</html>