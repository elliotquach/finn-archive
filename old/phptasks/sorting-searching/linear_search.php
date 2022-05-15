<?php
// array to be searched
$input = array(10, 20, 80, 30, 60, 50, 110, 100, 130, 170);

// query for search
$query = 110;

// show result of the search
echo linearSearch($input, $query);

// returns the index of the queried element, or -1 if not found
function linearSearch($array, $query) {
    for ($i = 0; $i < count($array); $i++) {
        if ($query == $array[$i]) {
            return $i;
        }
    }
    return -1;
}
?>