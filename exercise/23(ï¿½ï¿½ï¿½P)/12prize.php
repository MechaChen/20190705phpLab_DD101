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
    $num = 0;
    $total = 0;
    do {
        $num++;
        echo "第 $num 次:";
        $tmp = rand(0, 10);
        echo "$tmp<br>";
        $total = $total + $tmp;
    } while ($tmp != 0);
    echo "共 $num 次，總和: $total<br>";
    ?>

</body>

</html> 