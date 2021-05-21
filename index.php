<?php

include_once "DivideByZeroException.php";

function divide($numerator, $denominator)
{
    if ($denominator == 0) {
        throw new DivideByZeroException();
    }
    return $numerator / $denominator;
}

try {
    echo divide(5, 0);
    echo divide(5, 1);
} catch (DivideByZeroException $e) {
    echo $e;
}
