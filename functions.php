<?php
 $sum = 0;
 $num1 = 10;
 $num2 = 15;
function calcAdd(&$num1, &$num2){
    $num2 = $num2 + 57;
    $sum = $num1 + $num2;
    return $sum;
} 

echo $sum;

echo $num1;
echo $num2;
?>