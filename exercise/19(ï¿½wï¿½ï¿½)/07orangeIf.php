<?php 




echo "等級為",$_REQUEST["RR"],"<br>";
$TOTLE=0;
if($_REQUEST["RR"]==1){
	if($_REQUEST["DD"]<=40){
		echo "總共".$TOTLE=$_REQUEST["DD"]*30,"元";
	}
	elseif($_REQUEST["DD"]>100){
		echo "總共".$TOTLE=$_REQUEST["DD"]*20,"元";
	}
	elseif($_REQUEST["DD"]>40){
		echo "總共".$TOTLE=$_REQUEST["DD"]*25,"元";
	}
	
}
elseif($_REQUEST["RR"]==2){
	if($_REQUEST["DD"]<=40){
		echo "總共".$TOTLE=$_REQUEST["DD"]*25,"元";
	}
	elseif($_REQUEST["DD"]>100){
		echo "總共".$TOTLE=$_REQUEST["DD"]*15,"元";
	}
	elseif($_REQUEST["DD"]>40){
		echo "總共".$TOTLE=$_REQUEST["DD"]*20,"元";
	}
	
}

elseif($_REQUEST["RR"]==3){
	if($_REQUEST["DD"]<=40){
		echo "總共".$TOTLE=$_REQUEST["DD"]*20,"元";
	}
	elseif($_REQUEST["DD"]>100){
		echo "總共".$TOTLE=$_REQUEST["DD"]*10,"元";
	}
	elseif($_REQUEST["DD"]>40){
		echo "總共".$TOTLE=$_REQUEST["DD"]*15,"元";
	}
	
}




 ?>