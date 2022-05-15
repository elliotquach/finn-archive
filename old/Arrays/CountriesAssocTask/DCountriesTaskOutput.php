<?php
    $city = $_POST["city"];

    echo "<h1>Large Cities Again</h1>";

    // define countries for each city
    $countries = array(
        "Tokyo" => "Japan",
        "Mexico City" => "Mexico",
        "New York City" => "USA",
        "Mumbai" => "India",
        "Seoul" => "Korea",
        "Shanghai" => "China",
        "Lagos" => "Nigeria",
        "Buenos Aires" => "Argentina",
        "Cario" => "Egypt",
        "London" => "England"
    );
    $country = $countries[$city];

    echo "You have chosen to visit $city in $country";
?>