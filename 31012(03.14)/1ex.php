<?php
    $num = array(15,13,9,7,6,12,19,30, 28, 26);
    $count = 10; //배열 원소의 개수(10)를 $coumt에 입력

    echo "정렬되기 전 : ";

    for($a = 0; $a < 10; $a++) {
        echo $num[$a]."&nbsp";
    }

    echo "<br/>";

    for($i = $count - 2; $i >= 0; $i--) {
        for($j = 0; $j <=$i; $j++){
            if($num[$j] > $num[$j + 1]) {
                $tmp = $num[$j];
                $num[$j] = $num[$j + 1];
                $num[$j + 1] = $tmp;
            }
        }
    }
    echo "<br>";
    echo "오름차순 정렬(버블정렬) : ";
    for($a = 0; $a<10; $a++){  //버블 정렬 후 
        echo $num[$a]."    ";
    }
    
?>