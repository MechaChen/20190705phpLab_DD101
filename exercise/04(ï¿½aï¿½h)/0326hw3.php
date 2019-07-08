<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style type="text/css">
	td{
		width: 200px;
	}
</style>
<body>

<h2>作業五</h2>
<?php 

$sum = 0;
$price =  $_GET["price"];
$number = $_GET["number"];
$total = $price * $number ;

   if ($total >= 500) {
    $sum = $total * 0.9 ;
    printf("小計 : %.2f" ,$sum);
  }else
printf("小計 : %d" ,$total);

 ?>


<h2>作業六</h2>

<?php 
$sum = 0;
$price =  $_GET["price"];
$number = $_GET["number"];
$total = $price * $number ;

   if ($total >= 500 && $total < 1000 ) {
    $sum = $total * 0.9 ;
    printf("小計 : %.2f" ,$sum);
  }elseif ($total >= 1000) {
   $sum = $total * 0.7 ;
   printf("小計 : %.2f" ,$sum);
  }else
  printf("小計 : %d" ,$total);
 ?>





 <h2>作業七</h2>
<?php 

$total = 0 ;
$number1 = $_GET["number"];
$level = $_GET["type"];
// $total = $price * $number ;
$total = 0;
$number = $_GET["number"];
$level = $_GET["type"];
// $total = $price * $number ;
if ($level == 1 ) {
  if ($number < 40 ) {
    $total = $number * 30 ;
    printf("等級 : %d 單價 : 30 小計 :%d" , $level , $total);
  }elseif ($number >= 40 && $number!= 100) {
    $total = $number * 25 ;
    printf("等級 : %d 單價 : 25 小計 :%d" , $level , $total);
  }elseif ($number >= 100) {
    $total = $number * 20 ;
    printf("等級 : %d 單價 : 20 小計 :%d" , $level , $total);
  }
}elseif ($level == 2 ) {
  if ($number < 40 ) {
    $total = $number * 25 ;
    printf("等級 : %d 單價 : 25 小計 :%d" , $level , $total);
  }elseif ($number >= 40 && $number!= 100) {
    $total = $number * 20 ;
  printf("等級 : %d 單價 : 20 小計 :%d" , $level , $total);
  }elseif ($number >= 100) {
    $total = $number * 15 ;
    printf("等級 : %d 單價 : 15 小計 :%d" , $level , $total);
  }
}elseif ($level == 3 ) {
  if ($number < 40 ) {
    $total = $number * 20 ;
    printf("等級 : %d 單價 : 20 小計 :%d" , $level , $total);
  }elseif ($number >= 40 && $number!= 100) {
    $total = $number * 15 ;
  printf("等級 : %d 單價 : 15 小計 :%d" , $level , $total);
  }elseif ($number >= 100) {
    $total = $number * 10 ;
    printf("等級 : %d 單價 : 10 小計 :%d" , $level , $total);
  }
}else
 printf("請重新輸入");
  //   $sum = $total * 0.9 ;
  //   printf("小計 : %.2f" ,$sum);
  // }elseif ($total >= 1000) {

// $total = $price * $number ;
 ?>
<h2>作業八</h2>
<?php 

$total = 0;
$number = $_GET["number"];
$level = $_GET["type"];

switch ($level) {
  case '1':
    if ($number < 40 ) {
    $total = $number * 30 ;
    printf("等級 : %d  數量 : %d 單價 : 30 小計 :%d" , $level ,$number, $total);
  }elseif ($number >= 40 && $number!= 100) {
    $total = $number * 25 ;
    printf("等級 : %d 數量 : %d 單價 : 25 小計 :%d" , $level , $number,$number,$number,$total);
  }elseif ($number >= 100) {
    $total = $number * 20 ;
    printf("等級 : %d  數量 : %d 單價 : 20 小計 :%d" , $level ,$number,$number, $total);
  }
    break;
  case'2':
  if ($number < 40 ) {
    $total = $number * 25 ;
    printf("等級 : %d   數量 : %d 單價 : 25 小計 :%d" , $level , $number,$total);
  }elseif ($number >= 40 && $number!= 100) {
    $total = $number * 20 ;
  printf("等級 : %d  數量 : %d 單價 : 20 小計 :%d" , $level , $number,$total);
  }elseif ($number >= 100) {
    $total = $number * 15 ;
    printf("等級 : %d  數量 : %d 單價 : 15 小計 :%d" , $level , $number,$total);
  }
  break;
  case '3':
  if ($number < 40 ) {
    $total = $number * 20 ;
    printf("等級 : %d  數量 : %d 單價 : 20 小計 :%d" , $level , $number,$total);
  }elseif ($number >= 40 && $number!= 100) {
    $total = $number * 15 ;
  printf("等級 : %d  數量 : %d 單價 : 15 小計 :%d" , $level , $number,$total);
  }elseif ($number >= 100) {
    $total = $number * 10 ;
    printf("等級 : %d  數量 : %d 單價 : 10 小計 :%d" , $level , $number,$total);
  }
  break;
  default:
     printf("請重新輸入");
    break;
}
 ?>


<h2>作業九</h2>
<?php 
  $numbers =  $_GET["plus"];
  $sum1 = 0 ;
  $all = 0 ;
  $num = 0 ;
  for ( $i = 1 ; $i <=$numbers ; $i++ ){
     $sum1 = $sum1 + $i ;
  }
printf("正整數和 => 輸入 : %d sum : %d <br>", $numbers, $sum1 );

for( $i = 0 ;  $i <=$numbers ; $i+=2 ){
    $all = $all + $i ;
}
printf("偶數和 => 輸入 : %d 偶數和 : %d<br>", $numbers,   $all );
for( $i = 1 ;  $i <=$numbers ; $i+=2 ){
   $num =  $num + $i ;
}
printf("奇數和 => 輸入 : %d 奇數和 : %d<br>", $numbers,  $num );
  
 ?>


	<h2>作業十</h2>
	<?php
echo "<table align='center' border='1' cellspacing='0'>";
	for($i = 1 ; $i <= 10 ; $i = $i + 2){
		$a = ($i+1) ;
		printf("<tr><td>$i</td><td>$a</td></tr>");
	} 
	
	 ?>
	
</body>
</html>