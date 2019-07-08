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


        


$total= 0;
for( $i=1; $i <= $_REQUEST["VALUE"] ;$i++){
$total += $i;
}
if($_REQUEST["VALUE"]>=0)
echo "全部總和:$total<br>";
else
echo "您輸入的值無效，請回到上一頁重新輸入<br>";

?>

<?php

$double= 0;
for( $i=0; $i <= $_REQUEST["VALUE"] ;$i+=2){
        $double += $i;
}
if($_REQUEST["VALUE"]>=0)
echo "雙數總和:$double<br>";
else
echo "您輸入的值無效，請回到上一頁重新輸入<br>";

?>

<?php

$single= 0;
for( $i=1; $i <= $_REQUEST["VALUE"] ;$i+=2){
        $single += $i;
}


if($_REQUEST["VALUE"]>=0)
echo "單數總和:$single<br>";
else
echo "您輸入的值無效，請回到上一頁重新輸入<br>";

?>

    
</body>
</html>