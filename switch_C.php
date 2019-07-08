<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
<style type="text/css">
h2 {
	color:deeppink;
}	
</style>
</head>
<body>
<?php
$lowType = "1";
$education = true;
switch( $lowType ){
	case "1" : 
	           $amount = 5000;
	           if( $education == true){
	           	 $amount = $amount + 1000;
	           }
	           break;
	case "2" : 
	           $amount = 3000;
	           break;
	case "3" : 
	           $amount = 1000;
	           break;
	default : 
	           $amount = 0;
}

echo "補助款:$amount <br>";   
?>      

<?php

$education = true;
switch( $education ){
	case true : 
               echo "有人在唸書";
	           break;
	case false : 
	           echo "没有人在唸書";
	           break;

}
 
?>  


</body>
</html>