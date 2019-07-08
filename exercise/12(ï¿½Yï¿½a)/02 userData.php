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
	caption{
		color: deeppink;
		margin-bottom: 5px;
	}
	th{
		background-color: #FFC9C9;
	}
</style>

</head>


<body>
     <?php 
     $name="小丸子";
     $age="25歲";
     $address="中央極品";


    echo "
     <table border= 1>
		<caption>個人小檔案</caption>
        <tr>
            <th>姓名:</th>
            <td>{$name}</td>
        </tr>
       
        <tr>
            <th>年齡:</th>
            <td>{$age}</td>
        </tr>

        <tr>
            <th>地址:</th>
            <td>{$address}</td>
        </tr>

    </table>
    ";

     ?>
</body>
</html>