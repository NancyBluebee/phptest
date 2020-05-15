<?php

sum(20,50);
echo "<HR>";
sum2(20,50,100);
echo "<hr>";
sum3([20,50,100,120,50]);
echo "<hr>";
sum4(20,77,[12,"BB"],"AA");

function sum($a,$b){
    echo $a+$b;
}

function sum2($a,$b,$c){
    echo $a+$b+$c;
}

function sum3($a){
    $sum=0;
    foreach($a as $c){
        $sum=$sum+$c;
    }
    echo $sum;
}
function sum4($b,...$a){
    print_r($a);
    $sum=$b;
    foreach($a as $c){
        $sum=$sum+$c;
    }
    echo $sum;
}

?>