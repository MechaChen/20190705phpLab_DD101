<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, tr, td {
            border-collapse:2;
            border:1px solid #000;
            text-align:center;
            width:100px;
        }
    </style>
</head>
<body>
    <?php
        $i=0;
        $ii=0;
        echo "<table border'1' collspace>";
        
        for($i=1;$i<=10;$i+=2){
            $ii=$i+1;
            echo "<tr><td>$i</td><td>$ii</td></tr>";
        }
        echo "</table>";
    
    
    
    
    ?>
</body>
</html>