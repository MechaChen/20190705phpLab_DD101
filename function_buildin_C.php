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

<h2>數學</h2>
<?php
echo "ceil(3) : ", ceil(3), "<br>";
echo "ceil(3.5) : ", ceil(3.5), "<br>";
?>

<h2>字串</h2>
<?php
$str = "abcdeabcde";
echo "字串長度 : ", strlen($str), "<br>";

echo "strpos('$str', 'cd') : ", strpos($str, 'cd'), "<br>";
echo "strpos('$str', 'cdd') : ", strpos($str, 'cdd'), "<br>";
echo "strpos('$str', 'ab') : ", strpos($str, 'ab'), "<br>";
$temp = 'ab';
if( strpos($str, $temp) === false){
  echo "$temp 找不到";
}else{
  echo "$temp 找到了";
}
?>

<h2>字串.....</h2>
<?php
$str = "abc宗玄宗偉";
echo "字串長度 : ", mb_strlen($str), "<br>"; //multi byte
echo "mb_strpos() : ", mb_strpos($str, "宗偉")
?>


<h2>有關時間和日期 time() , date("格式",時間點)</h2>	
<?php

$now = time(); //1970, 1, 1, 0, 0, 0
echo "現在是 : ", $now,"<br>"; 
echo date("今天是Y-m-d H:h:i D", $now) , "<br>";   
echo date("今天是Y-m-d H:h:i D") , "<br>"; 

//make time 
$birthday = mktime(0,0,0,2,8,1994); //hours, minutes, seconds, month, date, year
echo date("帥哥在 D 哇哇落地", $birthday) , "<br>";   
?>      
</body>
</html>