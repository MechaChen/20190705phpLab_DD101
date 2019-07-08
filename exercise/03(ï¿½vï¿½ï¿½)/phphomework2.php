<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homework2</title>
    <style>
        caption {
            color:deeppink;
        }
        th{
        	background-color: pink
        }
    </style>
</head>
<body>
    <table border="2"><caption>個人小檔案</caption><?php 
    $name = "小丸子";
    $age = "是秘密唷...";
    $adress = "漫畫走廊...";
    echo 
        "<tr>
            <th>姓名 : </th>
            <td>$name</td>
        </tr>
        <tr>
            <th>年齡 : </th>
            <td>$age</td>
        </tr>
        <tr>
            <th>地址 : </th>
            <td>$adress</td>
        </tr>
    </table>"
    ?>    
</body>
</html>