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

th{
	background-color: orange;
	text-align: center;
	font-weight: bold;
}

h1{
	color: orange;
}
h2{
	color: #FF3EFF;
	font-weight: bold;
}

div th{
	background-color: pink;
}

</style>

</head>
<body>
	<?php echo '
	<h1>好媒媒班級通訊錄</h1>
    <table border="2">
    	<tr>
    		<th>學號</th>
    		<th>姓名</th>
    		<th>電話</th>
    	</tr>
    	<tr>
    		<td>94951001</td>
    		<td>黃一丁</td>
    		<td>0911000333</td>
    	</tr>
    	<tr>
    		<td>94951002</td>
    		<td>劉二毛</td>
    		<td>0922999887</td>
    	</tr>
    	<tr>
    		<td>94951003</td>
    		<td>張大化</td>
    		<td>0933555779</td>
    	</tr>
    </table>'; 
    ?>

    <hr>

	<h2>個人小檔案</h2>
	<div class="table1">
	
		
	
	<table border="2">
	<?php 
	$name="小丸子";
	$age="99";
	$address="公園"; 
	echo "
		<tr>
			<th>姓名：</th>
			<td>$name</td>
		</tr>
		<tr>
			<th>年齡：</th>
			<td>$age</td>
		</tr>
		<tr>
			<th>地址：</th>
			<td>$address</td>
		</tr>
	</table>
	</div>" 
	?>
</body>
</html>