<?php 


$SS=$_REQUEST["TT"]*$_REQUEST["DD"];



echo "小計:",$SS,"元<br>";
if($SS>1000){
	echo "若消費金額超過1000元, 則打七折",$SS*=0.7;
}
elseif ($SS>500) {
	echo "若消費金額超過500元, 則打九折",$SS*=0.9;
}





 ?>