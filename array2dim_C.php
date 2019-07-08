<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
<style>
h2 {
	color:blue;
}
td {
    width:30px
}
</style>
</head>
<body>
<h2>建立二維索引陣列</h2>    
<?php 
$arr = array( array(1,2,3,4), array(11,12,13,14), array(21,22,23,24));
echo "<table border='1' cellspacing='0' align='center'>";
for($i=0; $i<3; $i++){
   echo "<tr>";
   for( $j=0; $j<4; $j++){//j:0, 1, 2,3
       echo "<td>",$arr[$i][$j], "</td>";
   }
   echo "</tr>";
}
echo "</table>";
?>

<h2>使用foreach</h2>    
<?php 
$arr = array( array(1,2,3,4), array(11,12,13,14), array(21,22,23,24));

echo "<table border='1' cellspacing='0' align='center'>";
foreach( $arr as $i => $row){ //$row本身放的是一個陣列
    echo "<tr>";
    foreach($row as $j=> $data){
        //echo "<td>", $data, "</td>"; 
        echo "<td>", $arr[$i][$j], "</td>";//$data 和 $arr[$i][$j]
    }
    echo "</tr>";
}
echo "</table>";
?>


<h2>算平均</h2>    
<?php 
$arr = array( array(1,2,3,4), array(11,12,13,14), array(21,22,23,24));
echo "<table border='1' cellspacing='0' align='center'>";

for($i=0; $i<3; $i++){
   echo "<tr>"; //這裡是一個新列
   $total = 0;  //還没計算成績之前先設定其總和為0
   for( $j=0; $j<4; $j++){//j:0, 1, 2, 3 ，把每一個成績印出並累加起來
       echo "<td>",$arr[$i][$j], "</td>";
       $total = $total + $arr[$i][$j];
   }
   echo "<td>", $total/4, "</td>";
   echo "</tr>";
}
echo "</table>";
?>


</body>
</html>