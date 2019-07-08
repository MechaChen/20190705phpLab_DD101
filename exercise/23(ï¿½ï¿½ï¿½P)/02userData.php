<!DOCTYPE html>
<html>

<head>
    <title>好媒媒班級通訊錄</title>
    <style>
        th {
            background-color: palevioletred
        }

    </style>
</head>

<body>
	<?php
	$name='小丸子';
	$age='是秘密喔...';
	$address='漫畫走廊...';


    echo "<div>
        <h2 style='color:palevioletred'>個人小檔案</h2>
        <table border='1'>
            <tr>
                <th>姓名:</th>
                <td>$name</td>
            </tr>
            <tr>
                <th>年齡:</th>
                <td>$age</td>
            </tr>
            <tr>
                <th>地址:</th>
                <td>$address</td>
            </tr>
        </table>
    </div>";?>

</body>

</html>