<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            text-align: center;
        }
        table, tr, th, td {
            border: 1px inset #aaa;
            
        }
        th{
            width: 100px;
        }
        td{
            width: 300px;
        }
        .input{
            width: 400px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    $a=$_REQUEST["memName"];
    $b=$_REQUEST["memId"];
    $c=$_REQUEST["memPsw"];
    $d=$_REQUEST["email"];
    $aa=$_REQUEST["sex"];
    $f=$_REQUEST["birthday"];
    $g=$_REQUEST["tel"];
        echo
        "<table>
            <caption>
                您的會員資料為
            </caption>
            <tr>
                <th>姓名:</th>
                <td>$a</td>
            </tr>
            <tr>
                <th>帳號:</th>
                <td>$b</td>
            </tr>
            <tr>
                <th>密碼:</th>
                <td>$c</td>
            </tr>
            <tr>
                <th>e-mail:</th>
                <td>$d</td>
            </tr>
            <tr>
                <th>性別</th>
                <td>$aa</td>
            </tr>
            <tr>
                <th>生日:</th>
                <td>$f</td>
            </tr>
            <tr>
                <th>聯絡電話:</th>
                <td>$g</td>
            </tr>
        </table>";
    ?>
</body>
</html>