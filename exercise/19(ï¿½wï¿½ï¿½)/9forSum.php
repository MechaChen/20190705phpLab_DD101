<?php 


$_REQUEST["DD"];





$Q=0;
for($i=1;$i<=$_REQUEST["DD"];$i++){
$Q+=$i;
}
echo "總合為:",$Q,"<br>";

$Q=0;
for($i=1;$i<=$_REQUEST["DD"];$i+=2){
$Q+=$i;
}
echo "奇數總和為:",$Q,"<br>";

$Q=0;
for($i=0;$i<=$_REQUEST["DD"];$i+=2){
$Q+=$i;
}
echo "偶數總和為:",$Q;



 ?>