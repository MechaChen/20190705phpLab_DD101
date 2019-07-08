<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$a = 10;
echo "有a嗎?", isset($a), "<br>";  //true
echo "有b嗎?", isset($b), "<br>";  //false

unset($a);
echo "有a嗎?", isset($a), "<br>";  //false
echo "有b嗎?", isset($b), "<br>";  //false
?>    
</body>
</html>