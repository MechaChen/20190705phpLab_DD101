<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	 form{
		margin:auto;
		width: 400px;
		}
		h2{
		text-align: center;
		}
		table{
			width: 400px;
		}
	</style>
</head>
<body>

	<form>
     <h2>您的會員資料為</h2>
	 <table border 2px solid >
	 	<tr>
	 	<td>姓名:</td>
	 	<td><?php echo $_REQUEST["memName"]?></td>
	    </tr>
	 <tr>
	 	<td>帳號:</td>
	 	<td><?php echo $_REQUEST["memId"]?></td>
	 </tr>
	 <tr>
	 	<td>密碼:</td>
	 	<td><?php echo $_REQUEST["memPsw"]?></td>
	 </tr>
	 <tr>
	 	<td>E-MAIL:</td>
	 	<td><?php echo $_REQUEST["email"] ?></td>
	 </tr>
	 <tr>
	 	<td>性別:</td>
	 	<td><?php echo $_REQUEST["sex"] ?></td>
	 </tr>
	 <tr>
	 	<td>生日:</td>
	 	<td><?php echo $_REQUEST["bh"]; ?></td>
	 </tr>
	 <tr>
	 	<td>連絡電話:</td>
	 	<td><?php echo $_REQUEST["tel"]  ?></td>
	 </tr>
	 </table> 
   </form>

</body>
</html>