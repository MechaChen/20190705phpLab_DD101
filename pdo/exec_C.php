<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
<?php 
try {
	$dsn = "mysql:host=localhost;port=3306;dbname=sample";
	$user = "root";
	$password = "root";
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO($dsn, $user, $password, $options);
	echo "連線成功 <br>";	
	//$sql = "update emp set sal = sal + 1000 where empno = 7369";
	$sql = "update emp set sal = sal + 1000 where sal<4000";
	$affectedRow = $pdo->exec($sql);
	echo "異動成功了{$affectedRow}筆資料 <br>";	
} catch (PDOException $e) {
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	// echo "系統暫時發生狀況，請通知系統維護人員<br>";
}
?>    
</body>
</html>