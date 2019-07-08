<?php 
$A=1;
$Z=0;
		do {
			echo '第',$A++,'次';
			echo $S=mt_rand(0,10),"<br>";
			$Z+=$S;			
			} while ($S!=0);
			echo "總金額:".$Z*100,'元';
 ?>















