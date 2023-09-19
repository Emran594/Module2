<?php 
// $fistNu = 0;
// $secondNu = 1;
// for($i = 2; $i<10;$i++){
//     $result = $fistNu + $secondNu;

//     if($result>100){
//         break;
//     }
//     echo $result.PHP_EOL;

//     $fistNu = $secondNu;
//     $secondNu = $result;
// }

function printFibonacci($count) {
    $first = 0;
    $second = 1;

    echo $first . PHP_EOL;
    echo $second . PHP_EOL;

    for ($i = 2; $i < $count; $i++) {
        $next = $first + $second;
        echo $next . PHP_EOL;
        
        $first = $second;
        $second = $next;
    }
}

printFibonacci(15);
