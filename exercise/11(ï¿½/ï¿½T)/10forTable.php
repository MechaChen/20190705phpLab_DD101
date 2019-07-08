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
        $i=0;
        $a=0;
        echo "<table align='center' border='1' cellspacing='0'>";
        for($i=1;$i<=10;$i+=2){ //下個循環會是i+2
            $a=$i+1; //不管怎樣a都比i大1 
        echo "<tr><td>$i</td><td>$a</td></tr>";}
        echo "</table>";
    ?>
</body>
</html>