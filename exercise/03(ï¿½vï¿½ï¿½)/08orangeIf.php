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
    switch ($level) {
        case "1":
            if ($quantity < 40)
                $price = 30;
            elseif ($quantity >= 40)
                $price = 25;
            if ($quantity > 100)
                $price = 20;
            break;
        case "2":
            if ($quantity < 40)
                $price = 25;
            elseif ($quantity >= 40)
                $price = 20;
            if ($quantity > 100)
                $price = 15;
            break;
        case "3":
            if ($quantity < 40)
                $price = 20;
            elseif ($quantity >= 40)
                $price = 15;
            if ($quantity > 100)
                $price = 10;
            break;
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