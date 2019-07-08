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
        echo "<table width='25%' align='left' border='1'>";
        for($i=0; $i<=10; $i++){
            if($i % 2 == 1 ){
                echo "<tr>
                        <td>$i</td>
                            
                    </tr>";
            }    
        }
        echo "</table>";

        
        echo "<table width='25%' align='center' border='1'>";
        for($a=2; $a<=10; $a++){
            if($a % 2 == 0 ){
                echo "<tr>
                        <td>$a</td>
                            
                    </tr>";
            }    
        }
        echo "</table>";            
        
    ?>
        <!-- <td>$a</td>        && $a % 2 == 0 -->

</body>
</html>