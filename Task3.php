<?php
echo "First 10 Fibonacci numbers are (except the numbers crossing 100) : "."<br>";

    $a= 0;
    $b= 1;

    echo "$a $b";
    for($i = 2; $i<=10; $i++){
        $next = $a + $b;      
        $a = $b;
        $b = $next;

        if($next>=100){
            break;
        }
        else{
            echo " $next";
        }
    }


    echo "\n";