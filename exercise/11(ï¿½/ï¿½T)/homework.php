<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">


    td{
        border:2px solid #aaaa;
        width: 70px;height: 30px;
    } /*表格的格子*/

    th,
    td {
        padding: 0 10px;
        text-align: center;
    } /*格子裡面的字*/

    table{
/*        border-collapse: collapse;*/
  /*      border-spacing: 0;*/
        font-size:20px;
        border:2px solid #aaaa;
    }
    .color{
        background-color: #ffcc99;
        font-weight: bold;
    }
    .only{
        background-color: #ffc0cb;
        font-weight: bold;
    }
    h2{
        color: #ff6666;
    }
    h3{
        color:#ff1493;
    }
    

    </style>
</head>
<body>



	<?php



    echo
    ("<table> 
        <caption><h2>好某某班級通訊錄</h2></caption>
        <tr>
            <td class=\"color\"> 學號</td>
            <td class=\"color\"> 姓名</td>
            <td class=\"color\"> 電話</td>
        </tr>
        <tr>
            <td>94951001</td>
            <td>黃一丁</td>
            <td>0911000333</td>
        </tr>
        <tr>
            <td>94951002</td>
            <td>劉二毛</td>
            <td>0922999882</td>
        </tr>
        <tr>
            <td>94951003</td>
            <td>張大化</td>
            <td>0933555779</td>
        </tr>

    </table>");




	?>
	
    <?php

    $Name="小丸子";$Age="30";$Adress="女王頭";

    echo
    ("<table>
    	<caption><h3>個人小檔案<h3></caption>
        <tr>
            <td class=\"only\">姓名：</td>
            <td> $Name </td>
        </tr>
        <tr>
            <td class=\"only\">年齡：</td>
            <td> $Age </td>
        </tr>
        <tr>
            <td class=\"only\">地址：</td>
            <td> $Adress </td>
        </tr>

    </table>");
    ?>


	
</body>
</html>