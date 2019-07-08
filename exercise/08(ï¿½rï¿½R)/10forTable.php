<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
		caption{
			padding-bottom: 10px;
		}
		th{
			width: 150px;
		}
		td{
			width: 150px;
		}
        tr{
            border: 1px solid #000;
        }
	</style>
</head>
<body>
    
            <?php
            $num1 = 0;
            $numOdd = 0;
            echo "<table><tr>";

            for($num1=1 ; $num1<=10; $num1=$num1+2){
            echo "<td>", $num2,"</tr>";
            $numOdd = $numOdd + $num1;
            }
            echo"奇數總和: $numOdd";
       
            $num2 = 0;
            $numEven = 0;
            for($num2=2 ; $num2<=10; $num2=$num2+2){
            echo "<td>", $num2,"</td>";
            $numEven = $numEven + $num2;
            }
            echo"偶數總和: $numEven";

            echo "</table></tr>";
            

            ?>
            </tr>
    </table>
    
    
</body>
</html>