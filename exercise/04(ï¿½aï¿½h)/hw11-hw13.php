<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>



<h2>作業十一</h2>
	<?php 
            
           $sum = 0 ;
           for ( $i = 1 ; $i <=10 ; $i++ ){
           	$number = mt_rand( 0 , 10 );
           	printf("%d &nbsp" ,$number);  

           	 $sum += $number ;
           }
          
           printf("%d" , $sum * 100 );


	 ?>



<h2>作業十二</h2>
<?php 
     $sum = 0 ;
    for ( $i = 1; $i != 0 ; $i++ ) { 
    	$number = mt_rand( 0 , 10 );
        // printf("%d &nbsp" ,$number);
printf("第 %d 次 : %d &nbsp <br>" ,$i ,$number );  
         $sum += $number ;

    	if( $number == 0){
    		break ;
    	}
        
    }

    printf("<br>");
    printf("總次數 : %d &nbsp <br>" ,$i);  
    printf("<br>");
    printf("總金額 : %d" , $sum * 100 );

    

 ?>	

 <h2>作業十三</h2>
 <?php 
        $salary = $_GET["money"];
        $tax = 0 ;
        if( $salary <= 540000 ){
            $tax = $salary * 0.05 - 0 ;
              printf("輸入綜合所得淨額 : %d <br> <br>應納稅額 : %d" , $salary , $tax ) ;
        }elseif ( $salary <= 1210000 ) {
        	$tax =  $salary * 0.12 - 37800 ;
        	printf("輸入綜合所得淨額 : %d <br> <br> 應納稅額 : %d" , $salary , $tax ) ;
        }elseif ( $salary <= 2420000 ) {
        	$tax =  $salary * 0.2 - 134600 ;
        	printf("輸入綜合所得淨額 : %d <br> <br> 應納稅額 : %d" , $salary , $tax ) ;
        }elseif ( $salary <= 4530000) {
        	$tax =  $salary * 0.3 - 376600 ;
        	printf("輸入綜合所得淨額 : %d <br> <br> 應納稅額 : %d" , $salary , $tax ) ;
        }elseif ( $salary <= 10310000) {
        	$tax =  $salary * 0.4 - 849600 ;
        	printf("輸入綜合所得淨額 : %d <br> <br> 應納稅額 : %d" , $salary , $tax ) ;
        }elseif ( $salary > 10310001 ) {
        	$tax =  $salary * 0.45 - 1345100 ;
        	printf("輸入綜合所得淨額 : %d <br> <br> 應納稅額 : %d" , $salary , $tax ) ;
        }else
            printf("輸入錯誤!!!")



  ?>
</body>
</html>