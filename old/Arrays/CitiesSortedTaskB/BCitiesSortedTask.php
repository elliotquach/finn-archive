<?php
    $cities = array(
        "Tokyo",
        "Mexico City",
        "New York City",
        "Mumbai",
        "Seoul",
        "Shanghai",
        "Lagos",
        "Buenos Aires",
        "Cario",
        "London"
    );
    
    echo "<h1>Large Cities</h1>";
    
    // loop through cities
    for ($counter = 0; $counter < count($cities); $counter++) {
        // if statement ensures there isnt a comma at end
        if ($counter == count($cities) - 1) {
            echo "$cities[$counter]";
        } else {
            echo "$cities[$counter], ";
        }
    }

    // echo of unordered cities
    echo "<ul>";
    foreach ($cities as $city) {
        echo "<li>$city</li>";
    }
    echo "</ul>";

    // order cities
    sort($cities);

    // echo of ordered cities
    echo "<ul>";
    foreach ($cities as $city) {
        echo "<li>$city</li>";
    }
    echo "</ul>";

?>