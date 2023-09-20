<?php 
// Task 1: Looping with Increment using a Function
function evenwithfor($start, $end, $step) {
    if($start % 2 ==1){
        $start += 1;
    }
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}
$start = 3;
$end = 20;
$step = 2;


evenwithfor($start, $end, $step);

echo PHP_EOL;

function evenWithWhile($start, $end, $step) {
    if($start % 2 ==1){
        $start += 1;
    }
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    }
}

$start = 1; 
$end = 20;
$step = 2;

evenWithWhile($start, $end, $step);

echo PHP_EOL;

function evenWithWhiDoWhile($start, $end, $step) {
    if($start % 2 ==1){
        $start += 1;
    }
    $i = $start;
    do {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    } while ($i <= $end);
}

$start = 1; 
$end = 20;
$step = 2;

evenWithWhiDoWhile($start, $end, $step);