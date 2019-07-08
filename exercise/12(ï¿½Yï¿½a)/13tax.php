<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border=1>
			<tr>
				<td>應納稅額:</td>
				<td><?php 
				$income = $_REQUEST["income"];
				$tax =0;
				if($income >10310001)  {
					$tax = $income*0.45 -1345100;
				}elseif($income >4530001)  {
					$tax = $income*0.4 -829600;
				}elseif($income >2420001)  {
					$tax = $income*0.3 -376600;
				}elseif($income >1210001)  {
					$tax = $income*0.2 -134600;
				}elseif($income >540001)  {
					$tax = $income*0.12 -37800;
				}else{
					$tax= $income*0.05;
				}
				echo "$tax 元";
				 ?></td>
			</tr>
		</table>
		
</body>
</html>