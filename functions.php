<?php
 $sum = 0;
 $num1 = 10;
 $num2 = 15;
function calcAdd(&$num1, &$num2){
    $num2 = $num2 + 57;
    $num1 = $num1 + 8;
    $sum = $num1 + $num2;
    return $sum;
} 

echo $sum;
echo '<br>';

echo $num1;
echo '<br>';
echo $num2;
echo '<br>';
?>