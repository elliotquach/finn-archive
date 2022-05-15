<?php
// array to be searched (must be sorted)
$input = array(10, 20, 30, 40, 50, 60, 100, 110, 130, 170);

// query for search
$query = 40;

// show result of the search
echo binary_search($input, $query);

// returns the index of the queried element, or -1 if not found
function binary_search($array, $query) {
    $lower = 0;
    $upper = count($array) - 1;
    
    while ($lower <= $upper) {
        $median_index = floor(($lower + $upper) / 2); 
        $median = $array[$median_index];
    
        if ($median == $query) {
            return $median_index;
        } else if ($query > $median) {
            $lower = $median_index + 1;
        } else if ($query < $median) {
            $upper = $median_index - 1;
        }
    }

    return -1;
}
?>