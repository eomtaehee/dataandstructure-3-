<?php
    function hap($n){
        $sum=0;
        for ($i=1; $i<=$n; $i++) {
            $sum += $i;
        }
        echo "리턴값이 없는 함수 예: ".$sum."<br>";
    }

    hap(100);

    function hap_r($n) {
        $sum=0;
        for ($i=1; $i<=$n; $i++){
            $sum +=$i;
        }
        return $sum;
    }

    echo "리턴값이 있는 함수 예: ".hap_r(200)."<br>";

    $score=array(11,22,33,44,55);

    echo "배열의 맨처음 인덱스 값: ".$score[0]."<br>";
    echo "배열의 세번째 인덱스 값: ".$score[2]."<br>";

    $lehgth = count($score);
    $sum = 0;
    for ($i=0; $i<$lehgth; $i++){
        $sum += $score[$i];
    }
    echo "합".$sum;
    echo "평균".$sum/$lehgth;
    
?>