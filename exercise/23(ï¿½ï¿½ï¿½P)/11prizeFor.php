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
    $total = 0;
    for ($i = 1; $i <= 10; $i++) {
        $tmp = rand(0, 10);
        $total = $total + $tmp;
        echo "第 $i 次：$tmp<br>";
    }
    echo "總和 = $total <br>";
    ?>
</body>

</html> 