<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
  echo "帳號: {$_REQUEST["memId"]}<br>";
  echo "英文: <br>";
  if( isset($_REQUEST["ability"]) === true){

    foreach($_REQUEST["ability"] as $i=>$data){
        echo $_REQUEST["ability"][$i], " <br>";
        //echo "$data<br>";
    }      
  
  }else{
      echo "英文能力未選~~<br>";
  }


  echo "專長: <br>";
  if( isset($_REQUEST["specialty"]) === true){
    foreach($_REQUEST["specialty"] as $i=>$data){
        echo "$data<br>";
    }      
  }else{
      echo "專長能力未選~~<br>";
  }
?>    
</body>
</html>