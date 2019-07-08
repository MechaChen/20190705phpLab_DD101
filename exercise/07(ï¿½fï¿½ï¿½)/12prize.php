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


$total=0;
$i=0;


do{
$i++;
$price=mt_rand(0,10);
$total+=$price;
echo"$price<br>";
}while($price!=0);
echo"$i 次";
echo"$total 元";

?>


</body>
</html>