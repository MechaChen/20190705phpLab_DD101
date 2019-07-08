

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
<style >
	h2{
		color: red ;
		text-align: center;
	}
	table{
		margin: auto;
	}
	th{
		background-color: orange ; 
    	}

    td{
          padding: 5px;
    }	
	.hw2 {
		background-color: pink;
		padding-right: 20px;
		padding-top: 5px;
		padding-left: 5px;
		padding-bottom: 5px;
	}
	h3{
		color:deeppink;
		text-align: center;
	}

</style>
<body>
   
<?php

echo "<h2>好媒媒班級通訊錄</h2>" ;

echo '<table border="1"  >
   	<tr>
   		<th>
   		  
   		  學號 
   		  			
   		</th>
   		<th>
   		    姓名
   		</th>
   		<th>
   			電話
   		 
   		</th>
   		
   	</tr>
   	<tr>
   		<td> 94951001  </td>
   		<td> 黃小丁 </td>
   		<td> 0911000333</td>
   	</tr>
   	<tr>
   		<td>94951002</td>
   		<td>劉二毛</td>
   		<td>0922999881</td>
   	</tr>
   	<tr>
   		<td>94951003</td>
   		<td>張大化</td>
   		<td>0933555779</td>
   	</tr>
   </table> ';

   echo "<br><br><br><br>";
 ?>
   


   <h3>個人小檔案</h3>

    <table border="1">
    	<tr>
    		<th class="hw2">姓名:</th>
            <td><?php 
        echo $name = "小丸子";
             ?></td>
    	</tr>
    	<tr>
    		<th class="hw2">年齡:</th>
    		<td>
    			<?php 
    			 echo $age = "是秘密呦..." ;
    			 ?>
    		</td>
    	</tr>
    	<tr>
    		<th class="hw2">地址:</th>
    	<td><?php 
      echo $address = "漫畫走廊..."
    		 ?>    		 	
    		 </td>
    	</tr>
    </table>

</body>
</html>