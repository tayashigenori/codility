<?php

/*
 *Assume that:
 *
 * N is an odd integer within the range [1..1,000,000];
 * each element of array A is an integer within the range [1..1,000,000,000];
 * all but one of the values in A occur an even number of times.
 * Complexity:
 * 
 * expected worst-case time complexity is O(N);
 * expected worst-case space complexity is O(1), beyond input storage (not counting the storage required for input arguments).
 *
 * Elements of input arrays can be modified.
 */

function solution($A) {
    while ( count($A) > 1 ) {
        $first_element = array_shift( $A );
        $A = remove( $first_element, $A);
    }
    return $A;
}

function remove($needle, $hay_stack) {
    foreach ($hay_stack as $k=>$v) {
        if ( $needle == $v) {
            unset( $hay_stack[$k] );
        }
    }
    return $hay_stack;
}

$A = array(
    0 => 9,
    1 => 3,
    2 => 9,
    3 => 3,
    4 => 9,
    5 => 7,
    6 => 9
);

var_dump( solution($A) );

