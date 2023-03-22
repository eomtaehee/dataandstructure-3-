<?php
$sum = 0;
$num = array(1,2,3,4,5);
for($i=0; $i<5; $i++){
    if($i%2 == 0){   // (==)짝수의 합 (!=)홀수의 합
       $sum = $sum + $num[$i]; //$sum+=$i
       echo $num[$i]."<br>";
    }   
}
    // echo "0부터 10까지의 합 : ".$sum ; 
    // echo "0부터 10까지 중애서 짝수의 합 : ".$sum ;
    // echo "0부터 10까지 중애서 홀수의 합 : ".$sum ;
    echo "배열의 합 : ".$sum ;
?>