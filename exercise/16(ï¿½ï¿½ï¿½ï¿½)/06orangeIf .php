<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>作業六:if練習 </title>
	<style type="text/css">
		table{
			border: 1px solid grey;
			width: 30%;
			margin: 0 auto;
		}

		td{
			border: 1px solid grey;
		}

	</style>


</head>
<body>




<table>
		<caption>總計</caption>		

	<tr>
		<td> 價格</td>
		<td> <?php echo $_GET["price"]; ?> </td>
	</tr>

	<tr>
		<td> 數量</td>
		<td> <?php echo $_GET["quatity"]; ?> </td>
	</tr>		

 	<tr>
		<td> 總計</td>
		<td> <?php echo $_GET["price"] * $_GET["quatity"]; ?> </td>
	</tr> 

	<tr>
		<td> 折扣後價格(若超過500打9折/超過1000打七折):</td>
		<td> 
			<?php 
				$sum=$_GET["price"] * $_GET["quatity"];
				
				if ($sum>=1000) {
					$sum=$sum*0.7;
					echo $sum ;
				}


				elseif ($sum >=500){
					$sum=$sum*0.9;
					echo $sum ;
					}


				else{
					echo $sum ;
					}
		
			?>
		</td>
	</tr>
	
</table>


	

</body>
</html>