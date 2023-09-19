<?php
echo "Numbers between 1 to 50, skip multiples of 5: "."<br>";
for($i=1; $i<=50; $i++){
    if($i%5==0){
        continue;
    }
    else{
        echo $i;
        echo "\n";
    }
}