<?php
$tol = 0;
for($i=1 ; $i <= 10 ; $i++){
    $a = rand(0,10);
    $tol =  $tol + $a;
    }
    echo $tol*100;
?>



<?php
$tol = 0;
for($i=1 ; $i > 0 ; $i++){
    $a = rand(0,10);
    echo "$a<br>";
    $tol =  $tol + $a;
    if($a==0){
        break;
    }}
    echo $tol*100;
?>