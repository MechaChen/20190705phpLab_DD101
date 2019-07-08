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
        <table border="1px">
            <tr>
                <td>正整數：</td>
                <td><?php echo $_GET["num"];?></td>
            </tr>
            <tr>
                <?php
                    $sum = 0;    // 總和
                    $sum_1 = 0;  // 奇數和
                    $sum_2 = 0;  // 偶數和
                    $num = $_GET["num"];  //使用者輸入的值
                    for($i = 1;$i <= $num;$i++) {   //從1算到該值
                        $sum = $i + $sum;           //計算總和
                        if ($i % 2 == 1) {          //是否為奇數
                            $sum_1 = $sum_1 + $i;   //奇數總和
                        } else {
                            $sum_2 = $sum_2 + $i;   //偶數總和
                        }
                    }
                    ?>
                <td>總和：</td>
                <td><?php echo $sum;?></td>
            </tr>
            <tr>
                <td>奇數總和：</td>
                <td><?php echo $sum_1;?></td>
            </tr>
            <tr>
                <td>偶數總和：</td>
                <td><?php echo $sum_2;?></td>
            </tr>


        </table>




</body>

</html>