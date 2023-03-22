<?php
$count=0;
    for($n=100; $n<=500; $n++){
        if($n%5==0){
            echo $n." ";
            $count++;  //$count=$count+1
            if($count%10==0){
                echo "<br>";
            }
        }
    }
?>