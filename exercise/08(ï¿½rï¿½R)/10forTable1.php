<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        td{
            width :150px;
        }

	</style>
</head>
<body>
    <table border = 1>
        <?php
        $num = 0;
        for($num=1 ; $num<=10; $num++){
            if ($num % 2 == 1)
            echo "<tr><td>$num</td>";
            
            if ($num % 2 == 0)
            echo "<td>$num</td></tr>";
            }
        ?>
    </table>
    
    
</body>
</html>