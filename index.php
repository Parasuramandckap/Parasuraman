<?php

$array = [4, 1, 2, 5];
$result = [];

function isDescendingOrder($array)
{
    for ($i = 0; $i < (count($array) - 1); $i++) {
        if($i<count($array)-1){
            if ($array[$i+1] > $array[$i]) {
                return false;
            }
        }
    }
    return true;
}
if (isDescendingOrder($array)) {
    echo "The array is already arranged in descending order.";
} else {
    do {
        for ($i = count($array) - 1; $i >=0 ; $i--) {
            if($i<count($array)-1){
                if ($array[$i] < $array[$i + 1]) {
                    $temp = $array[$i + 1];
                    $array[$i + 1] = $array[$i];
                    $array[$i] = $temp;
                    array_push($result, $array);
                }
            }
        }
    } while (! isDescendingOrder($array));
    print_r($result);
}