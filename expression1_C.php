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


<h2>++在前</h2>
<?php 
$x = 10;//x:11

$y = ++$x + 100;  //11+100
echo "x : $x <br>";
echo "y : $y <br>";
?>

<h2>++在後</h2>
<?php 
$x = 10;  //x:11
$y = $x++ + 100;  //y:10+100
echo "x : $x <br>"; //11
echo "y : $y <br>"; //110
?>

<hr>
<?php 
$a=10;  //a:12
$b = ++$a + ++$a; // 11  + 12           
echo "a : $a <br>";
echo "b : $b <br>";
?>

<?php 
$a=10;  //a:12
$b = $a++ + $a++; //  10 +  11 ,b:21                

echo "a : $a <br>";
echo "b : $b <br>";
?>

<hr>
<h2>--在前</h2>
<?php 
$x = 10;//x:9
$y = --$x + 100;  // 9 + 100 ,109
echo "x : $x <br>";
echo "y : $y <br>";
?>

<h2>--在後</h2>
<?php 
$x = 10;  //x:9
$y = $x-- + 100;  //y: 10 + 100,110
echo "x : $x <br>"; //
echo "y : $y <br>"; //
?>

<h2>@@@@@@@@@@</h2>
<?php 
$x = 100;
$y = 0;
$z = @ ($x / $y);

?>

<hr>

	<h2>算術</h2>
<?php
   $a = 14;
   echo "$a*4 : ", $a*4 , "<br>";
   echo "$a/4 : ", $a/4 , "<br>";
   echo "$a%4 : ", $a%4 , "<br>";
?> 

    <h2>比較</h2>
<?php
   $a = 14;
   echo "$a > 4 : ", $a > 4 , "<br>"; //true
   echo "$a < 4 : ", $a < 4 , "<br>"; //false 
   echo "3 <= 4 : ", 3 <= 4 , "<br>"; //true

   echo "0 === false : ", 0 === false , "<br>"; //false
   echo "0 == false : ", 0 == false , "<br>";  //true

   $mm = 3;
   echo "是本月的壽星嗎 ? ", $mm == 3 ,"<br>";
?> 

    <h2>邏輯</h2>
<?php
   $a = 14;
   echo "$a > 4 and 10>5 ?  ", ($a > 4) and 10>5 , "<br>"; //true and true --> true
   echo "$a < 4 or 10>5 ?  ", $a < 4 or 10>5 , "<br>"; //false or true --> true 
   echo "3 <= 4 xor 10>5 ?  ", 3 <= 4 xor 10>5 , "<br>"; //true xor true --> false
   echo "! false  ?  ", ! false  , "<br>"; //true
   echo "! 3  ?  ", ! 3  , "<br>"; //false
   echo "! 3 <= 4  ?  ", ! 3 <= 4  , "<br>"; // false<=4 --> true
   echo "! (3 <= 4)  ?  ", ! (3 <= 4)  , "<br>"; // ! true -->false
?> 

    <h2>位元</h2>
<?php
   $a = 14;
   echo "7 & 12 =  ", 7 & 12 , "<br>"; //
   echo "7 | 12 =  ", 7 | 12 , "<br>";
?>

<h2>字串結合</h2>
<?php 
echo "桃園市" . "中壢區" . "中央路1號" , "<br>";
echo "桃園市" , "中壢區" , "中央路1號" , "<br>";
// $address =  "桃園市" + "中壢區" + "中央路1號" + "<br>";
// echo $address;
 ?>

 <h2>指定</h2>
<?php 
$x = 10;
$x += 2;  //$x = $x + 2;
echo "x : $x <br>";  //x : 12

$x *= 2;  //$x = $x * 2; 
echo "x : $x <br>";//x:24

$x = 100;
$x %= 3;  //$x = $x % 3;
echo "x : $x <hr>"; //1

echo $x = 2 + 3 *6;
?> 

 <h2>指定 2</h2>
<?php 
$c = $b = $a = 100;

echo "a : $a <br>";  //
echo "b : $b <br>";  //
echo "c : $c <hr>";  //
?> 
</body>
</html>