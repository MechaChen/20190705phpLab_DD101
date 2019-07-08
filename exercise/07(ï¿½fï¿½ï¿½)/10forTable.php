<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
table tr td{
border: 1px solid black;
width: 20px;

}


}

</style>

</head>
<body>

<?php

echo "<table>";


for($i=1 ; $i<=10 ;$i++ ){


    if($i%2 !== 0){
    echo "<tr><td>$i</td>";}
    else{
    echo "<td>$i</td></tr>";}
    }


echo "</table>";



?>


</body>
</html>