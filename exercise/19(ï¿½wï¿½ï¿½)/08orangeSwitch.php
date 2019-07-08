<?php 




echo "等級為",$_REQUEST["RR"],"<br>";
$TOTLE=0;
switch($_REQUEST["RR"]){


	case "1":
			if($_REQUEST["DD"]<=40){
		echo "總共".$TOTLE=$_REQUEST["DD"]*30,"元";
	}
	elseif($_REQUEST["DD"]>100){
		echo "總共".$TOTLE=$_REQUEST["DD"]*20,"元";
	}
	elseif($_REQUEST["DD"]>40){
		echo "總共".$TOTLE=$_REQUEST["DD"]*25,"元";
	}

	break;

case "2":
		if($_REQUEST["DD"]<=40){
		echo "總共".$TOTLE=$_REQUEST["DD"]*25,"元";
	}
	elseif($_REQUEST["DD"]>100){
		echo "總共".$TOTLE=$_REQUEST["DD"]*15,"元";
	}
	elseif($_REQUEST["DD"]>40){
		echo "總共".$TOTLE=$_REQUEST["DD"]*20,"元";
	}

	break;


case "3":
	if($_REQUEST["DD"]<=40){
		echo "總共".$TOTLE=$_REQUEST["DD"]*20,"元";
	}
	elseif($_REQUEST["DD"]>100){
		echo "總共".$TOTLE=$_REQUEST["DD"]*10,"元";
	}
	elseif($_REQUEST["DD"]>40){
		echo "總共".$TOTLE=$_REQUEST["DD"]*15,"元";
	}


	break;





}





 ?>