<?php

/*
 * Complete the 'kangaroo' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. INTEGER x1
 *  2. INTEGER v1
 *  3. INTEGER x2
 *  4. INTEGER v2
 */

function kangaroo($x1, $v1, $x2, $v2) {
    for ($x = 0; $x <= 10000; $x++) {
        $x1 = ($x1 + $v1);
        $x2 = ($x2 + $v2);

        if ($x1 === $x2) {
            return 'YES';
        }
    }
    
    return 'NO';
}

$x1 = 0;

$v1 = 3;

$x2 = 4;

$v2 = 2;

$result = kangaroo($x1, $v1, $x2, $v2);

var_dump($result);
