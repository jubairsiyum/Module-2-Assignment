<?php
#for Loop
echo "Even Numbers using for loop: "."<br>";
for($i=2; $i<=20; $i+=2){

    echo $i;
    echo "\n";
    
}
echo "<br><br>";



#While Loop
echo "Even Numbers using While loop: "."<br>";
$i=2;
while($i<=20){
    echo $i;
    $i+=2;

    echo "\n";
}
echo "<br><br>";



#Do While Loop
echo "Even Numbers using do While loop: "."<br>";
$i=0;
do{    
    $i=$i+2;
    echo $i;

    echo "\n";

}while($i<20);
echo "<br><br>";
?>