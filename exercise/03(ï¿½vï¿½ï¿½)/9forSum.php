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
        $n = $_GET["number"];
        $t = $t2 = $t3 = 0;
        for($a = 1 ; $a <= $n ; $a++){
            $t = $t + $a;
        }

        for($a = 1 ; $a <= $n ; $a++){
            if($a % 2 == 0){
            $t2 = $t2 + $a;
            }
        }

        for($a = 1 ; $a <= $n ; $a++){
            if($a % 2 == 1){
            $t3 = $t3 + $a;
            }
        }
    ?>

    <table border="2" align="center">
        <?php echo "
        <tr>
            <td>","1到",$n,"的總和","</td>
            <td>$t</td>
        </tr>
        <tr>
            <td>偶數和</td>
            <td>$t2</td>
        </tr>
        <tr>
            <td>奇數和</td>
            <td>$t3</td>
        </tr>";
        ?>
    </table>
</body>
</html>