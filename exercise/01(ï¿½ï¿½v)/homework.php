<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, tr, th, td {
            border: 1px solid black;
        }
        .thead {
            background-color: #fa0;
        }
        .changcolor {
            background-color: #faf;
        }
        p{
            margin:0 0 0 20px;
        }
    </style>
</head>
<body>
    <p>好媒媒班級通訊錄</p>
    <?php
        echo "<table>
        <tr class = 'thead'>
                <th>學號</th>
                <th>姓名</th>
                <th>電話</th>
             </tr>
         <tr>
                <td>94951001</td>
                <td>黃一丁</td>
                <td>0911000333</td>
             </tr>
         <tr>
                <td>94951002</td>
                <td>劉二毛</td>
                <td>0922999887</td>
             </tr>
        <tr>
                <td>94951003</td>
                <td>張大化</td>
                <td>0933555779</td>
             </tr>
        </table>";
    ?>

<p>班級通訊錄</p>
    <?php
        $name = "小丸子";
        $age = "是秘密喲...";
        $ad = "漫畫走廊";

        echo "<table>
            <tr>
                <th class = 'changcolor'>姓名:</th>
                <td>$name</td>
            </tr>
            <tr>
                <th class = 'changcolor'>年齡:</th>
                <td>$age</td>
            </tr>
            <tr>
                <th class = 'changcolor'>地址:</th>
                <td>$ad</td>
            </tr>
         </table>";
    ?>
</body>
</html>