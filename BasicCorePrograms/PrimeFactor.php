<?php
$number=readline('Enter the Number: ');
for ($i=2; $i<$number ; $i++) { 
    while($number%$i==0){
        $number = $number/$i;
        echo $i." ";
    }
}
if ($number >2) {
    echo $number;
}
?>