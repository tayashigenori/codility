<?php

/*
 * Complexity:
 * 
 * expected worst-case time complexity is O(log(N));
 * expected worst-case space complexity is O(1).
 */

// this function takes space complexity is O(log(N))?
function get_binary($N, $base = 2) {
    $N_bin = array();
    $tmp_shou = $N;
    while ( $tmp_shou > 1 ) {
        $shou = (int) $tmp_shou / $base;
        $amari = $tmp_shou % $base;
        $N_bin[] = $amari;
        $tmp_shou = $shou;
    }
    $N_bin[] = $shou;
    return $N_bin;
}

function count_longest_ones( $N_bin ) {
    $binary_gaps = array();
    $current_bg_length = 0;
    $start_found = False;
    //$end_found = False;
    foreach ( $N_bin as $b ) {
        if ($b == 0) {
            if ($start_found == False) {
                $current_bg_length = 0;
            } else {
                $current_bg_length += 1;
            }
        } else { // $b == 1
            if ($start_found == False) {
                $start_found = True;
            } else {
                if ($current_bg_length > 0) {
                    $binary_gaps[] = $current_bg_length;
                    $current_bg_length = 0;
                } else {
                    // do nothing
                }
            }
        }
    }
    return $binary_gaps;
}

function solution($N) {
    $N_bin = get_binary( $N );
    $binary_gaps = count_longest_ones( $N_bin );
    return $binary_gaps;
}

var_dump( solution(9) );
var_dump( solution(529) );
var_dump( solution(20) );
var_dump( solution(15) );
var_dump( solution(1041) );

