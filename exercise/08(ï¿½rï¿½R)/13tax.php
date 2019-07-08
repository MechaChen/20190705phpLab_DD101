<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	</title>
	<style type="text/css">
		caption{
			padding-bottom: 10px;
		}
		th{
			width: 150px;
			text-align: center;
		}
		td{
			width: 300px;
			text-align: center;
		}
	</style>
</head>
<body>
    <?php
    $total = $_GET["total"];
    $tax = 0;
    if($total>=10310001){
        $tax=$total*0.45-1345100;
    }elseif($total>=4530001){
        $tax=$total*0.4-829600;
    }elseif($total>=2420001){
        $tax=$total*0.3-376600;
    }elseif($total>=1210001){
        $tax=$total*0.2-134600;
    }elseif($total>=540001){
        $tax=$total*0.12-37800;
    }else{
        $tax=$total*0.05;
    }

    echo "應納稅額 :", $tax;
    ?>

</body>
</html>