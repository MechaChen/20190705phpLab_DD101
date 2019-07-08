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

<h2>沒有參數,沒有傳回值</h2>
<?php
function sayHello(){
	echo "早安, 您好~<br>";
	return;
}

sayHello();
?> 


<h2>有一個參數,沒有傳回值</h2>
<?php
function sayHelloToSomeone( $name ){
	echo "早安, {$name}您好~<br>";
}

sayHelloToSomeone("巧韻");
?> 


<h2>有兩個參數,有傳回值</h2>
<?php
function sum2Num( $a, $b){ //a:10,  b:20, total:30
	$total = $a + $b;
	return  $total;
}

echo "10+20 = ", sum2Num(10, 20), "<br>";
?> 


<h2>有陣列型參數,有傳回值</h2>
<?php
function sumMany( $arr ){  //請傳入一個陣列,.............
	if( is_array( $arr) === true){
		$total = 0;
		for( $i=0; $i<count($arr); $i++){
			if( is_numeric( $arr[$i]) === true){
				$total += $arr[$i];
			}
		}
		return $total;
	}else{ //
		return false;
	}
}

echo "@@ ", sumMany(10) , "<br>";
echo "10+20 = ", sumMany( array(10, 20)),"<br>";
echo "10+20+30 = ", sumMany( array(10, 20, 30)),"<br>";
echo "10+20+30+40 = ", sumMany( array(10, 20, 30, 40)),"<br>";
echo "10+20+30+40+50 = ", sumMany( array(10, 20, 30, 40, 50)),"<br>";


echo "1=====", sumMany(1,2,3), "<br>";
echo "2=====", sumMany([1,2,3]), "<br>";
echo "3=====", sumMany( [1, true , 3, "This is a book"] ), "<br>";
?>  


<h2>傳址 byRef,byValue傳值</h2>
<?php 
function sum( &$a, $b){ 
	$total = $a + $b;
	$a = $a + 100;
	$b = $b + 100;
	return $total;
}

$x = 10;  
$y = 20;

echo "$x + $y = ", sum($x, $y), "<br>";
echo "x : $x <br>";  //110
echo "y : $y <br>";  //20
?>

<h2>調薪: byValue</h2>
<?php 
function adjustSalary($dataArr,$amt){
   for($i=0;$i<count($dataArr);$i++){
   		$dataArr[$i] = $dataArr[$i] + $amt;
   }
   return $dataArr;
}

$salaryArr = array(10000,20000,30000);
$salaryArr = adjustSalary($salaryArr,2000);
print_r($salaryArr);

?>

<h2>調薪 : byRef</h2>
<?php 
function adjustSalary_byRef(&$dataArr,$amt){
   for($i=0;$i<count($dataArr);$i++){
   		$dataArr[$i] = $dataArr[$i] + $amt;
   }
}

$salaryArr = array(10000,20000,30000);
adjustSalary_byRef($salaryArr,2000);
print_r($salaryArr);

?>


<h2></h2>
<?php 
function printMark($classId="前端工程師....."){
	echo "******<br>";
	echo "******<br>";
	echo "******<br>";
	echo "******<br>";
	echo "******<br>";
	echo "******$classId<br><br>";
}

printMark("CD106");
printMark("DD101");

printMark();

?>


<h2>全域變數 ..... 使用global來宣告</h2>
<?php 
$amount = 0;  //$amount : 0
function getAmount(){  
  global $amount;   
  //....
  //....
  $amount = 100000;
}

function showAmount(){
  global $amount;
  echo "營業額: ",$amount,"<br>";
}

getAmount(); 
showAmount();
echo "...... : $amount<br>";
?>



<h2>全域變數 ..... 使用$GLOBALS陣列</h2>
<?php 
$amount = 0;  //$amount : 0
function getAmount2(){  
   
  //....
  //....
  $GLOBALS["amount"] = 2000;
}

function showAmount2(){
  echo "營業額: ",$GLOBALS["amount"],"<br>";
}

getAmount2(); 
showAmount2();
echo "...... : $amount<br>";
?>

<h2>static</h2>
<?php 
function myStatic(){
  static $i=0;     //靜態變數  i=2
  $i +=1;
  return $i;
}
echo "呼叫myStatic函數第一次, i : " . myStatic(). "<br>";  //1
echo "呼叫myStatic函數第二次, i : " , myStatic(), "<br>";  //2
echo "呼叫myStatic函數第二次, i : " , myStatic(), "<br>";  //3

?>
</body>
</html>