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
$i=1;
$total=0;
for($i=1 ; $i<=10 ; $i++){
    $amount=mt_rand(0,10);
    echo "彩球金額 :", $amount*100,"<br>";
    $total+=$amount;
}
echo "彩金總金額 :", $total*100,"<br>";
?>

    
</body>
</html>