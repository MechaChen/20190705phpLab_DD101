<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <title>您的會員資料為</title>
    <style>
        th {
            background-color: rgb(39, 212, 169)
        }
    </style>
</head>

<body>
<div>
        <h2>申請會員</h2>
        <table border='1'>
            <tr>
                <th>姓名：</th>
                <td><?php echo$_GET["memName"]; ?></td>
            </tr>
            <tr>
                <th>帳號：</th>
                <td><?php echo$_GET["memId"]; ?></td>
            </tr>
            <tr>
                <th>密碼：</th>
                <td><?php echo$_GET["memPsw"]; ?></td>
            </tr>
            <tr>
                <th>e-mail：</th>
                <td><?php echo$_GET["email"]; ?></td>
            </tr>
            <tr>
                <th>性別：</th>
                <td><?php echo$_GET["sex"]; ?></td>
            </tr>
            <tr>
                <th>生日：</th>
                <td><?php echo$_GET["birthday"]; ?></td>
            </tr>
            <tr>
                <th>聯絡電話：</th>
                <td><?php echo$_GET["tel"]; ?></td>
            </tr>
        </table>
    </div>

</body>

</html>