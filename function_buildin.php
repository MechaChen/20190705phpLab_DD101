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

echo "strpos('$str', 'cd') : ", , "<br>";
echo "strpos('$str', 'cdd') : ", , "<br>";
echo "strpos('$str', 'ab') : ", strpos($str, 'ab'), "<br>";
$temp = ???;
if( strpos($str, $temp) === false){
  echo "$temp 找不到";
}else{
  echo "$temp 找到了";
}
?>


<h2>有關時間和日期</h2>	
<?php
echo date("Y-m-d H:h:i");
?>       
</body>
</html>