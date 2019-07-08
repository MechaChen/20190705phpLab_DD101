<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<table border='2' align='center'>";
    for ($i = 1; $i <= 10 ; $i++){
        if($i % 2 == 1){
            echo "<tr><td>$i</td><td>",$i+1,"</td></tr>";
        }
    }
        echo "</table>";
    ?>
</body>

</html> 