<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    $price = $_REQUEST["price"];
    $num = $_REQUEST["num"];
    $total = 0;
    if ($price * $num > 500 & $price * $num<1000) {
        $total = $price * $num * 0.9;
    } elseif ($price * $num > 1000) {
        $total = $price * $num * 0.7;
    }
    // if ($price * $num>1000) {
    //     $total = $price * $num * 0.7;
    // } elseif ($price * $num > 500) {
    //     $total = $price * $num * 0.9;
    // }

    echo "小記: $total 元";
    ?>
</body>

</html> 