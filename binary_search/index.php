<?php
function binary_search($list, $item)
{
    $high_index = count($list) - 1;
    $low_index = 0;

    while ($low_index <= $high_index) {
        $mid_index = floor($high_index + $low_index / 2);
        $guess = $list[$mid_index];
        echo "Low: $low_index, high: $high_index, mid: $mid_index, guess: $guess <br>";

        if ($guess === $item) {
            return $mid_index;
        } else if ($guess < $item) {
            $low_index = $mid_index + 1;
        } else if ($guess > $item) {
            $high_index = $mid_index - 1;
        }
    }
    return null;
}

$list = [10, 24, 30, 45, 75, 86, 97, 800, 901, 1000, 1560];
$target = 45;
$result = binary_search($list, $target);
if ($result !== null) {
    echo "The index of $target is: $result";
} else {
    echo "Item $target not found.";
}