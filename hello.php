<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
<style type="text/css">
h2 {
	color:deeppink;
}	
</style>
</head>
<body>

    <?php 
    echo "<h2>PHP簡介</h2>";
    echo 12345, "<br>";
    echo "hello<br>";

    //echo "姓名 : Sara<br>消費總額 :  600元<br>";

    echo "姓名 : ", "Sara", "<br>", "消費總額 : ", 600, "元<br>";

    printf("<h2>Welcome to PHP~</h2>");
  	printf("Hi %s ,您目前消費總額為%x <br>", "Mary", 15000);
  	printf("Hi %s ,您目前消費總額為%d <br>", "Mary", 15000);
  	printf("Hi %s ,您目前消費總額為%b <br>", "Mary", 15000);
  	// printf("地址:%s縣 %s市 %s路 %s號", "桃園", "中壢", "中央", "15");

    ?>
</body>
</html>