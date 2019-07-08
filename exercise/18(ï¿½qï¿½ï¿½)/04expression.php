<?php
$singlePrice = $_GET["single_price"];
$quantity = $_GET["quantity"];
$total = $singlePrice * $quantity;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        h1 {
            color: #fff;
        }
    </style>
    <title>Document</title>
</head>
<body>
<div class="jumbotron bg-info">
  <div class="container">
      <h1 class="display-4"><?php echo $total, "元"; ?></h1>
  </div> 
</div>
</body>
</html>
