<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>計算總和</h2>
    <table border="1px" >
    <?php
        for($i=1;$i<=10;$i++) {

            if($i % 2 == 1) {
                echo "<tr>";
                echo "<td>$i</td>";
            } else {
                echo "<td>$i</td>";
                echo "</tr>";
            }
        }

    ?>
    </table>
</body>

</html>