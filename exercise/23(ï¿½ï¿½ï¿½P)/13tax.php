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
    $num = $_GET["num"];  //使用者輸入的值
    $result;
    if (0 <= $num && $num <= 54000) {
        $result = $num * 0.05 - 0;
    } else if (540000 < $num && $num <= 1210000) {
        $result = $num * 0.12 - 37800;
    } else if (1210000 < $num && $num <= 2420000) {
        $result = $num * 0.20 - 134600;
    } else if (2420000 < $num && $num <= 4530000) {
        $result = $num * 0.30 - 376600;
    } else if (4530000 < $num && $num <= 10310000) {
        $result = $num * 0.40 - 829600;
    } else {
        $result = $num * 0.45 - 1345100;
    }
    echo "應繳稅額：$result";
    ?>

</body>

</html> 