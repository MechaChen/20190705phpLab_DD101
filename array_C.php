<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
<style>
h2 {
	color:blue;
}
</style>
</head>
<body>
<h2>建立一維索引陣列</h2>    
<?php 
$arr = array(11,22,33);
for( $i=0; $i<3 ; $i++){ 
	echo $arr[$i], " ";
}
echo $arr;
?>

<h2>陣列長度count()</h2>    
<?php 
$arr = array(11,22,33);
$len = count($arr);
for( $i=0; $i<$len ; $i++){ 
	echo $arr[$i], " ";
}
?>

<h2>foreach()</h2>    
<?php 
$arr = array(111,222,333);
$arr[5] = 100;
foreach( $arr as $i => $data){ 
	echo "$i : $data<br>";
}
?>


<h2>foreach()...2</h2>    
<?php 
$arr = array(111,222,333);
$arr[5] = 100;
$len = count($arr); //4
foreach( $arr as $data){ 
	echo "$data<br>";
}
?>

<h2>建立一維索引陣列,直接指定</h2>    
<?php 
$arr2[] = 44;
$arr2[] = 55;

//echo $arr[]; //error

foreach( $arr2 as $i => $data){ 
	echo "$i : $data<br>";
}
?>


<h2>關聯性陣列</h2>
<?php
$zip = array("台北市"=>"001", "中壢市"=>"320","楊梅鎮"=>"326");
$zip["台南市"] = "600";
foreach( $zip as $city => $zipCode){ 
	echo "$city : $zipCode<br>";
}
?>

<h2>整體陣列的指定</h2>
<?php
$arr = array(11,22,33);
$arr2 = $arr;

foreach( $arr2 as $i => $data){ 
	echo "$i : $data<br>";
}
?>

<h2>print_r(), is_array() </h2>
<?php
$arr = array(11,22,33);
print_r( $arr );
echo "<br>";

$total = 0;
echo "arr 是陣列嗎? ", is_array($arr), "<br>";  //true
echo "total 是陣列嗎? ", is_array($total),"<br>";  //false
?>

<h2>找資料有没有在陣列中，若找到顯示其索引值: 自己找</h2>
<?php
$arr = array(11,22,33,44,55,66,77);
$sData = 55555;
$found = false;
foreach( $arr as $i=>$data){
	if( $data == $sData){
		echo  " $sData 在索引值 $i 的位置<br>";
		$found = true;
		break;
	}
}
if( $found == false){
	echo "$sData 找不到 !!<br>";	
}

?>

<h2>===============找資料有没有在陣列中，若找到顯示其索引值: array_search($data, $array)</h2>
<?php
$arr = array(11,22,33,44,55,66,77);
$sData = 55555;

echo  " 55 在索引值 " , array_search(55, $arr ) ,"的位置<br>"; //4
echo  " 55555 在索引值 " , array_search(55555, $arr ) ,"的位置<br>";  //false
?>

<h2>找資料有没有在陣列中: in_array($data, $array)</h2>
<?php
$arr = array(11,22,33,44,55,66,77);
$sData = 55555;

echo  " 55 在陣列中嗎 ?  " , in_array(55, $arr ) ,"<br>"; //true
echo  " 55555 在陣列中嗎 ?  " , in_array(55555, $arr ) ,"<br>"; //false
?>

<h2>shuffle()</h2>
<?php
$arr = array(11,22,33,44,55,66,77);
echo "洗牌前 :";
print_r($arr);
echo "<br>";
shuffle( $arr );

echo "洗牌後 :";
print_r($arr);
echo "<br>";

?>
</body>
</html>