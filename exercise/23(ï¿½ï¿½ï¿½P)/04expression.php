<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>計價</title>
</head>
<h2>計價</h2>

<body>
    <div>
        <table border="1">
            <tr>
                <td>單價:</td>
                <td><?php $price = $_GET["number01"];?></td>
            </tr>
            <tr>
                <td>數量:</td>
                <td><?php $number = $_GET["number02"]; echo $price*$number;?></td>
            </tr>
        </table>
    </div>

</body>

</html>