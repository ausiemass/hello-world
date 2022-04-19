<?php
 $sum = 0;
 $num1 = 10;
 $num2 = 15;
function calcAdd(&$number1, &$number2){
    $number2 = $number2 + 57;
    $number1 = $number1 + 8;
    $sum = $number1 + $number2;
    return $sum;
} 

echo $sum;
echo '<br>';

echo calcAdd($num1, $num2);
echo '<br>';
echo $num2;
echo '<br>';
echo $num1;
echo '<br>';
echo $num2;
echo '<br>';
echo $num1;
echo '<br>';
?>