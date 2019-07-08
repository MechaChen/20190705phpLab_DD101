<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homework1</title>
    <style>
    caption {
        color:red;
    }
    th {
        background-color:orange;
    }
    </style>
</head>
<body>
    <table border="2">
        <?php
        echo 
        "<caption>好媒媒班級通訊錄</caption>
       <tr>
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
            <td>0933555799</td>
        </tr>
    </table>";
    ?>
</body>
</html>