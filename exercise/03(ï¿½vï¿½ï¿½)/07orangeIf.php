<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
    $level = $_GET["level"];
    $quantity = $_GET["quantity"];
    if($level == 1){
        $price = 30;
        if($quantity >= 40)
        $price -= 5;
        if($quantity > 100)
        $price -= 5;
    }
    if($level == 2){
        $price = 25;
        if($quantity >= 40)
        $price -= 5;
        if($quantity > 100)
        $price -= 5;
    }
    if($level == 3){
        $price = 20;
        if($quantity >= 40)
        $price -= 5;
        if($quantity > 100)
        $price -= 5;
    }
    ?>
    <center>
        <table border=2>
            <caption>計價</caption>
            <tr>
                <td>等級 : </td>
                <td><?php echo $level; ?></td>
            </tr>
            <tr>
                <td>每公斤/元 : </td>
                <td><?php echo $price; ?></td>
            </tr>
            <tr>
                <td>公斤 : </td>
                <td><?php echo $quantity; ?></td>
            </tr>
            <tr>
                <td>小計 : </td>
                <td>
                    <?php echo $price * $quantity; ?>
                </td>
            </tr>
        </table>
    </center>
</body>

</html> 