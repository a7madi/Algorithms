<?php
function countdown($number)
{
    if ($number === 0)
        return; // base case
    echo "$number <br>";
    countdown($number - 1); // recursive base
}

function factorial($number)
{
    // base case:
    if ($number === 1) 
        return $number; 

    // recursive base:
    return $number * factorial($number - 1);
}

countdown(10);

$x = 5;
$xFact = factorial($x);
echo "Factorial $x is $xFact";