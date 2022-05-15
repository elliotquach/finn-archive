<?php
  $registrations = 
  [
    "8SD453" => "Sedan", 
    "8SD421" => "Sedan", 
    "7HB443" => "SUV", 
    "7HB446" => "Wagon", 
    "8SD521" => "SUV", 
    "ABC123" => "Hatchback"
  ];

  // -- LINEAR SEARCH --
  function linearSearch($searchArray, $searchKey) {
    foreach ($searchArray as $key => $value) {
      if ($key == $searchKey) {
        return [$key, $value];
      }
    }
  }

  $registration = linearSearch($registrations, "7HB446");

  echo "$registration[0] is a $registration[1]";

  // -- SELECTION SORT --
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
?>