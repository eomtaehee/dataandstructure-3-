<?php
    // 1번 문제
    $var1 = "홍길동";   //string
    $var2 = 18;   //int
    $var3 = 36.5;       //float

    echo var_dump($var1)."<br>";
    echo var_dump($var2)."<br>";
    echo var_dump($var3)."<br>";

echo "<br>";

    // 2번 문제
    $str="12345678";
    echo "문자열의 길이는".strlen($str)."<br>";

echo "<br>";

    // 3번 문제
    for($i=0; $i<=5; $i++){
        for($j=1; $j<=5; $j++){
            echo "*";
        }
        echo "<br>";
    }

echo "<br>";

    // 4번 문제
    for($i=1; $i<=5; $i++){
        for($j=1; $j<=$i; $j++){
            echo "*";
        }
        echo "<br>";
    }

echo "<br>";

    // 5번 문제
    echo date("Y/m/d h:i:s")
?>