<?php 
    $city = $_POST["city"];
    $month = $_POST["month"];
    $year = $_POST["year"];
    $weather = $_POST["weather"];

    echo "In $city in the month of $month, $year you observed the following weather:";
    echo "<ul>";
    foreach ($weather as $w) {
        echo "<li>$w</li>";
    }
    echo "</ul>";
?>