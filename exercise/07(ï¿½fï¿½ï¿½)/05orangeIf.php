<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">

</head>
<body>
    
<?php

if($_REQUEST["PRICE"]*$_REQUEST["QUANTITY"]>=500)
$total_amount= $_REQUEST["PRICE"]*$_REQUEST["QUANTITY"]*0.9;
else $total_amount=$_REQUEST["PRICE"]*$_REQUEST["QUANTITY"];
echo "總價為$total_amount";
?>

</body>
</html>