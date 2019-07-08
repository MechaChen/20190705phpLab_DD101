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
$name = "Ann";  
echo "名字 : {$name}<br>"; 
?>    

<h2>常數 define()</h2>	
<?php
// define("PI", 3.14, false); //false表大小寫視為不一樣
// echo "PI : ", PI , "<br>";  //OK

// echo "10 的圓面積 : ", 10 * 10 * PI , "<br>";
//echo "PI : ", Pi, "<br>";  //NG

// define("STEP", "生老病死", true); //true 表大小寫視為一樣,7.X.X不建議使用
// echo "四階段 : ", STEP, "<br>"; 
// echo "四階段 : ", Step, "<br>";  //7.X.X不建議使用
?>  

<h2>常數 const</h2>
<?php 
echo "PI :", M_PI , "<br>";
echo "PHP_VERSION :", PHP_VERSION , "<br>";

const DD101 = "前端工程師....";
echo DD101 , "<br>";

const DD101_TEACHER = "潔華";
echo "導師 : ", DD101_TEACHER;
?>	 


</body>
</html>