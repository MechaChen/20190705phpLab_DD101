<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .info {
            text-align: center;
            display: inline-block;
        }
        h2 {
            font-size: 16px;
            font-weight: normal;
        }
        td {
            padding: 0 40px;
        }
    </style>
</head>
<body>
    <div class="info">
        <h2>您的會員資料</h2>
        <table border="1">
                <tbody>
                <tr>
                    <td>姓名</td>
                    <td><?php echo $_GET["name"]; ?></td>
                </tr>
                <tr>
                    <td>帳號</td>
                    <td><?php echo $_GET["account"]; ?></td>
                </tr>
                <tr>
                    <td>密碼</td>
                    <td><?php echo $_GET["password"]; ?></td>
                </tr>
                <tr>
                    <td>e-mail</td>
                    <td><?php echo $_GET["email"]; ?></td>
                </tr>
                <tr>
                    <td>性別</td>
                    <td><?php echo $_GET["gender"]; ?></td>
                </tr>
                <tr>
                    <td>生日</td>
                    <td><?php echo $_GET["birth"]; ?></td>
                </tr>
                <tr>
                    <td>連絡電話</td>
                    <td><?php echo $_GET["telephone"]; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>