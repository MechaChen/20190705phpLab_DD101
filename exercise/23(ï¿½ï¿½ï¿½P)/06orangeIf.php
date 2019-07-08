<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h2>計價</h2>

        <table border="1px">
            <tr>
                <td>單價：</td>
                <td><?php echo $_GET["price"];?></td>
            </tr>
            <tr>
                <td>數量：</td>
                <td><?php echo $_GET["num"];?></td>
            </tr>
            <tr>
                <td>小計：</td>
                <td>
                    <?php
                    $total=$_GET["price"]*$_GET["num"];
                    if ($total > 1000)
                        echo $total * 0.9;
                    elseif ($total > 500)
                        echo $total * 0.7;
                    else
                        echo $total;
                    ?>
                </td>
            </tr>
        </table>
        
</body>
</html>