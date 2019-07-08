<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>PHP-HW</title>
		<style type="text/css">
			.contactTable caption{
				color: #FF6D6D;
				font-size: 20px;
				margin-bottom: 10px;
				font-weight: bold;
			}

			.contactTable, .contactTable th, .contactTable, td{
				border: 1px solid #999;
				box-shadow: 0 .2px 0 0 inset;
			}

			.contactTable th{
				background: #fc9;
			}

			.document caption{
				color: #FF2E9F;
				font-size: 20px;
				font-weight: bold;
				margin-bottom: 10px;
			}

			.document, .document th, .document td{
				border: 1px solid #999;
			}

			.document th, .document td{
				padding: 5px 6px;
				box-shadow: 0 .2px 0px 0 inset;
			}
			
			.document th{
				background: #FFC0CB;
			}
		</style>
	</head>

	<body>
	    <?php
	    	echo "
	    	<table class=\"contactTable\">
	    		<caption>好媒媒班級通訊錄</caption>
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
	    	</table>", "<br>";
	    ?>

	    <?php
	    	$name = "小丸子";
	    	$age = "是秘密喲...";
	    	$address = "漫畫走廊...";
	    	echo "
	    	<table class=\"document\">
	    		<caption>個人小檔案</caption>
	    		<tr>
	    			<th>姓名：</td>
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
	    	";
	    ?>
	</body>
</html>