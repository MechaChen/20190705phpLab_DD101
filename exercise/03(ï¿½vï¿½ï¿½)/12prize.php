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
    $ball = 0;
    $i = 0;
    $t = 0;
    while ($ball <= 10) {
        $ball = mt_rand(0, 10);
        $i += 1;
        $t += $ball * 100;
        if ($ball == 0) {
            break;
        }
        echo $i, "&nbsp;&nbsp;", $ball * 100, "<br>";
    }
    echo $t;
    ?>
</body>

</html> 