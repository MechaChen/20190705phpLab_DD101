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
<h2>變數</h2>
<?php
$name = "Sara";

$a_1 = 10;   
echo $a_1, "<br>";
?> 

<h2>整數</h2>
<?php 
echo 321, "<br>"; //321
echo 0321, "<br>";//209
echo 0x321, "<br>";//801
?>   

<h2>float</h2>
<?php 
echo 0.1234567890123456, "<br>"; //321
echo 0.1234567890123456e20, "<br>";
echo 17000000000000000000000, "<br>";
?>  


<h2>boolean</h2>
<?php 

echo "true : ", true, "<br>"; 
echo "false : ", false, "<br>"; 
?>   


<h2>string : 單引號</h2>
<?php 
echo 'I am Sara', "<br>"; 
echo 'I am "Sara"', "<br>"; 
echo 'I am \'Sara\'', "<br>";
echo 'I am \\Sara\\', "<br>";  
 ?>


 <h2>string : 雙引號</h2>
<?php 
echo "I am Sara", "<br>"; //.......
echo "I am \"Sara\"", "<br>"; 
echo "I am\n 'Sara'", "<br>";
echo "I am \\Sara\\", "<br>";  
 ?>

<h2>string : 雙引號有提供變數替換的功能</h2>
<?php 
$name = "Sara";
$money = 50000; 
echo "I am Sara, I have 50000", "<br>"; 
echo "I am ", $name ,", I have ", $money, "<br>";

echo 'I am $name, I have $money', "<br>"; //單引號不提供變數替換的功能
echo "I am $name, I have $money", "<br>";
echo "I am $name, I have $money 元", "<br>";
echo "I am $name, I have {$money}元", "<br>";
 ?> 

 <?php 
 $address = "Tainan";
 echo "地址 : ", $address, "<hr>";
  ?>



地址 : <?php echo $address; ?> <hr>
地址 : <?=$address?> <hr>
</body>
</html>