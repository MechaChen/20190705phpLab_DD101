<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">

<style type="text/css">

table,th,th,td{
  border: 1px solid black
}

.trhead{
	background-color:#FFC408;
}

.trhead2{
	background-color:#F596AA;
}

.hi{
	color:#CB1B45;
	margin-left:25px;
	margin-bottom:0px;
}

.ih{
	color:#F596AA;
	margin-left:20px;
	margin-bottom:0px;
}

</style>
</head>
<body>

	<?php 
echo "<h3 class='hi'>好媒煤班級通訊錄</h3>";

echo '<table>
<tr class="trhead">
        <th>學號</th>
        <th>姓名</th>
        <th>電話</th>
     </tr>
<tr>
        <td>97951001</td>
        <td>黃一丁</td>
        <td>0911000333</td>
     </tr>
<tr>
        <td>97951001</td>
        <td>劉二毛</td>
        <td>0922999887</td>
     </tr>
<tr>
        <td>97951001</td>
        <td>張大化</td>
        <td>0933555779</td>
     </tr>   
</table>';

	 ?>
<br>
<br>
<br>


	 	<?php 
echo "<h3 class='ih'>個人小檔案</h3>";
 $name = "sabo";
 $age = "17";
 $address ="桃園中壢...";

echo"<table>
<tr>
        <th class='trhead2'>姓名:</th>
        <td>$name</td>
     </tr>
<tr>
        <th class='trhead2'>年齡:</th>
        <td>$age</td>
     </tr>   
     <tr>
        <th class='trhead2'>地址:</th>
        <td>$address</td>
     </tr>   
</table>";

	 ?>
    
</body>
</html>