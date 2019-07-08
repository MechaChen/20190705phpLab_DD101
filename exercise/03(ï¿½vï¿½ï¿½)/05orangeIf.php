<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
	$price = $_GET["price"];
	$quantity = $_GET["quantity"];
	?>
    <center>
        <table border=2>
            <caption>計價</caption>
            <tr>
                <td>單價 : </td>
                <td><?php echo $price; ?></td>
            </tr>
            <tr>
                <td>數量 : </td>
                <td><?php echo $quantity; ?></td>
            </tr>
            <tr>
                <td>小計 : </td>
                <td>
                    <?php
					if ($price * $quantity >= 500)
						echo $price * $quantity * .9, "(九折)";
					else echo $price * $quantity;
					?>
                </td>
            </tr>
        </table>
    </center>
</body>

</html> 