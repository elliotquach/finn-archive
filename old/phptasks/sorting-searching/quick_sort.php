<?php
// array to be sorted
$input = array(37, 16, 480, 1200, 2, 16, 78);

// show result of the search
print_r(quick_sort($input, 0, count($input) - 1));

function quick_sort($array, $lower, $upper) {   
    if ($lower < $upper) {
        $split = partition($array, $lower, $upper);
        $array = $split[0];
        $array = quick_sort($array, $lower, $split[1] - 1);
        $array = quick_sort($array, $split[1] + 1, $upper);
    }
    return $array;
}

function partition($array, $lower, $upper) {
    $pivot = $array[$upper];

    for ($i = $lower; $i < $upper; $i++) {
        if ($array[$i] < $pivot) {
            if ($lower != $i) {
                $array = swap_elements($array, $lower, $i);
            }
            $lower++;
        }
    }
    $array = swap_elements($array, $lower, $upper);
    return array($array, $lower);
}

function swap_elements($array, $first_index, $second_index) {
    $temp = $array[$first_index];
    $array[$first_index] = $array[$second_index];
    $array[$second_index] = $temp;
    return $array;
}

?>