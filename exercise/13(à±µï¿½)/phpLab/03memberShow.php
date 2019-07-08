<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
    	* {
            margin: 0;
            padding: 0;
        }

        .signUp {
            width: 377px;
            margin: 0 auto;
        }

        caption {
            font-size: 16px;
            padding: 20px 0px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>

     <div class="signUp">
        <form method="POST" action="phpLab/03memberShow.php">
            <table>
                <caption>您的會員資料為</caption>
                <tr>
                    <th>姓名</th>
                    <td><?php echo $_POST["memName"] ?></td>
                </tr>
                <tr>
                    <th>帳號</th>
                    <td><?php echo $_POST["memId"] ?></td>

                </tr>
                <tr>
                    <th>密碼</th>
                    <td><?php echo $_POST["memPsw"] ?></td>
                </tr>
                <tr>
                    <th>e-mail</th>
                    <td><?php echo $_POST["email"] ?></td>
                </tr>
                <tr>
                    <th>性別</th>
                    <td><?php echo $_POST["gender"] ?></td>
                </tr>
                <tr>
                    <th>生日</th>
                    <td><?php echo $_POST["birthday"] ?></td>
                </tr>
                <tr>
                    <th>連絡電話</th>
                    <td><?php echo $_POST["tel"] ?></td>
                </tr>
            </table>
        </form>
    </div>




                
</body>
</html>