<?php
$number1 = readline('Enter number 1 :');
$number2 = readline('Enter number 2 :');
$number3 = readline('Enter number 3 :');
if(($number1>$number2) & ($number1>$number3)){
    echo "$number1 is the Largest";
}elseif(($number2>$number1) & ($number2>$number3)){
    echo "$number2 is the Largest";
}else {
    echo "$number3 is the Largest";
}
