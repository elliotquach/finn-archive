<?php
// array to be sorted
$input = array(20, 32, 86, 57, 96, 102, 45, 89, 67);

// show result of the search
print_r(selection_sort($input));

function selection_sort($array) {
    $length = count($array);
    for ($i = 0; $i < $length - 1; $i++) {
        $smallest = find_smallest_index($array, $i, $length);
        $array = swap_elements($array, $smallest, $i);
    }
    return $array;
}

function find_smallest_index($array, $start, $end) {
    $smallest_index = $start;
    for ($i = $start; $i < $end; $i++) {
        if ($array[$i] < $array[$smallest_index]) {
            $smallest_index = $i;
        }
    }
    return $smallest_index;
}

function swap_elements($array, $first_index, $second_index) {
    $temp_first = $array[$first_index];
    $array[$first_index] = $array[$second_index];
    $array[$second_index] = $temp_first;
    return $array;
}

?>