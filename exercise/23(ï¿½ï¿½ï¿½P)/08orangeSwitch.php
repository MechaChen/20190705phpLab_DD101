<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h2>計價</h2>

        <table border="1px">
            <tr>
                <td>等級：</td>
                <td><?php echo $_GET["level"];?></td>
            </tr>
            <tr>
                <td>公斤數：</td>
                <td><?php echo $_GET["num"];?></td>
            </tr>
            <tr>
                <td>小計：</td>
                <td>
                    <?php
                    $level = $_GET["level"];
                    $num = $_GET["num"];
                    switch($level) {
                        case 1:
                        if($num > 100) {
                            echo $num * 20;
                        } else if ($num > 40) {
                            echo $num * 25;
                        } else {
                            echo $num * 30;
                        }
                        break;
                        
                        case 2:
                        if($num>100) {
                            echo $num*15;
                        }
                        else if($num>40) {
                            echo $num*20;
                        }
                        else{
                            echo $num*25;
                        }
                        break;

                        case 3:
                        if($num>100) {
                            echo $num*10;
                        }
                        else if($num>40) {
                            echo $num*15;
                        }
                        else{
                            echo $num*20;
                        }
                        break;
                    }

                    ?>
                </td>
            </tr>
        </table>
        
</body>
</html>