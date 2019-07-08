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

<h2>break</h2>	
<?php
$total = 0;
for( $i=1; $i<=1000; $i++){
	$total = $total + $i;
	if( $total > 1000){
		echo "1+2+...+$i = $total 超過1000<br>";
		break;
	}
} 
?>   

<h2>continue</h2>
<?php
$total = 0; 
for( $i=1; $i<=50; $i++){
  if( $i%3 != 0 ){  //不是3的倍數
  	continue;
  }
  echo $i, "&nbsp;&nbsp;";
  $total += $i;
}
echo "<br>總和 : $total";
?>   
</body>
</html>