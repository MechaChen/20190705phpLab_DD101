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

<h2>if句型一</h2>	
<?php
$avg = 53;
if( $avg >= 60)
   echo "通過~~<br>";

?>   

   <h2>if句型二</h2>	
<?php
$avg = 63;
if( $avg >= 60){
   echo "通過~~<br>";
   echo "列印證書中.....<br>";
}
?>  


<h2>if句型三</h2>	
<?php
$avg = 53;
if( $avg >= 60)  //true
   echo "通過~~<br>";
else  //false
	echo "再努力~~<br>";
?>   

   <h2>if句型四</h2>	
<?php
$avg = 63;
if( $avg >= 60){
   echo "通過~~<br>";
   echo "列印證書中.....<br>";
}else{
   echo "再努力~~<br>";
   echo "三餐飯後睡前複習~~<br>"	;
}
?>  

   <h2>if句型五</h2> 
<?php 
$avg = 38;

if($avg >= 90)
  $grade = "A";
elseif($avg >= 80) 
  $grade = "B";
elseif($avg >= 70)
  $grade = "C";
elseif($avg >= 60)
  $grade = "D";
else
  $grade = "E";

echo "等級為 $grade <br>";
?>

   <h2>if句型五</h2> 
<?php 
$avg = 38;

if($avg >= 90)
  $grade = "A";
elseif($avg >= 80) 
  $grade = "B";
elseif($avg >= 70)
  $grade = "C";
elseif($avg >= 60)
  $grade = "D";
else
  $grade = "E";

echo "等級為 $grade <br>";
?>



   <h2>if句型11</h2> 
<?php 
$lowType = "1";
$education = false;

if($lowType == "1"){
  $amount = 5000;
  if( $education == true){
    $amount = $amount+1000;
  }
}elseif($lowType == "2"){
  $amount = 3000;
}elseif($lowType == "3"){
  $amount = 1000;
}else{
  $amount = 0;
}

echo "補助款 : $amount <br>";
?>



<h2>........</h2>
<?php 
$avg = 66.6;
if( $avg >= 60){
   $msg = "通過";
}else{
   $msg = "再努力";
}

echo $msg, "<br>";
?>

<h2>........</h2>
<?php 
$avg = 36.6;

$msg = $avg >= 60? "通過":"再努力";
echo $msg, "<br>";
?>
</body>
</html>