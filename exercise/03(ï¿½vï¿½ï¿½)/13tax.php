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

    $i = $_GET["income"];
    switch ($i) {
        case ($i > 10310000):
            $d = $i * .45 - 1345100;
            break;
        case ($i > 4530000):
            $d = $i * .4 - 829600;
            break;
        case ($i > 2420000):
            $d = $i * .3 - 376600;
            break;
        case ($i > 1210000):
            $d = $i * .2 - 134600;
            break;
        case ($i > 540000):
            $d = $i * .12 - 37800;
            break;
        case ($i <= 540000):
            $d = $i * .05;
            break;
    }

    echo
        "<table align='center'>
        <caption>所得稅</caption>
        <tr>
            <td>應繳 : </td>
            <td>$d</td>
        </tr>
    </table>"
    ?>

</body>

</html> 