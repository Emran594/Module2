<?php
$first = 0;
$second = 1;

for ($i = 0; $i < 20; $i++) {
    if ($first > 100) {
        break; 
    }
    
    echo $first . " ";
    
    $result = $first + $second;
    $first = $second;
    $second = $result;
}
echo PHP_EOL;
//Fibonacci Series printing using a Function

function fibonacchi($num) {
    $first = 0;
    $second = 1;
    
    for ($i = 0; $i < $num; $i++) {
        echo $first . " ";
        
        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}

$num = 15;
fibonacchi($num);