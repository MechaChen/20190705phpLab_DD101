<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
    
    <style type="text/css">
    	.b1{
            width: 222px;
            text-align: center;
        }
        .b2{
            /*width: 150px;*/
            text-align: center;
            display: inline-block;
        }
        h2{
    		color:orange;
    		
    	}

    	table,th,td{
    		border: 2px solid black;
    	}

    	th{
    		background-color: orange;
    	}
		.t1{
			display: inline-block;
		}

    	.t1 td{

    		padding: 0 8px;
    	}

    </style>

    <!--作業 1
	<h2>好媒媒通訊錄</h2>-->
    <?php
    	echo
    		
    		"
            <div class=\"b1\">
            <h2>好媒媒通訊錄</h2> 
    		<table>
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

    		</table>
            </div>
            "

    ?>

    <!--作業 2-->
	
    <?php
    	$name= "小丸子";
    	$age= "是秘密唷";
    	$address= "漫畫走廊";

    	echo 

        "
        <div class=\"b2\">
	        <h2>個人小檔案</h2>
	        <table class=\"t1\">
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
        </div>

        "


    ?>

    

</body>
</html>