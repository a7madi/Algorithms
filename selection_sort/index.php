<?php

function minimum($list)
{
    if (empty($list))
        return null;

    $smallest = $list[0];
    $legnth = count($list);

    for ($i = 1; $i < $legnth; $i++) {
        if ($smallest > $list[$i]) {
            $smallest = $list[$i];
        }
    }
    return $smallest;
}

function selection_sort($list)
{
    if (empty($list))
        return null;
    $newList = [];
    $legnth = count($list);

    for ($i = 0; $i < $legnth; $i++) {
        $newList[$i] = minimum($list);
        $popIndex = array_search($newList[$i], $list);
        array_splice($list, $popIndex, 1);
    }
    return $newList;
}

echo '<pre>';
var_dump(selection_sort([1, 10, 5, 11, -300, 3, 9, -200]));
echo '</pre>';