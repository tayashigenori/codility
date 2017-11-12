<?php

/*
 * Assume that:
 *
 * N and K are integers within the range [0..100];
 * each element of array A is an integer within the range [−1,000..1,000].
 * In your solution, focus on correctness. The performance of your solution will not be the focus of the assessment.
 */

function solution($A, $K) {
    for ( $i = 0; $i < $K; $i++) {
        $A = rotate($A);
    }
    return $A;
}

function rotate( $A ) {
    $r = array();
    $last_value = end($A);
    foreach ($A as $k=>$v) {
        if ($k == 0) {
            $r[$k] = $last_value;
        } else {
            $r[$k] = $prev_value;
        }
        $prev_value = $v;
    }
    return $r;
}


$A = [3, 8, 9, 7, 6];
$K = 3;
var_dump( solution($A, $K) );

$A = [0, 0, 0];
$K = 1;
var_dump( solution($A, $K) );

$A = [1, 2, 3, 4];
$K = 4;
var_dump( solution($A, $K) );


