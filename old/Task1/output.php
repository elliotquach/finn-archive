<?php
    include("header.inc.php");

    $name = $_POST["name"];
    $yob = $_POST["yob"];
    $savingsPerYear = $_POST["savings"];
    $adjust = $_POST["hadBirthday"];
    $year = 2021;

    $age = $year - $yob - (strToLower($adjust) == "n" ? 1 : 0);
    $workYears = 67 - $age;
    $total = $workYears * $savingsPerYear;

    echo "<br><br>";
    echo "Hello $name. You are $age years old! ";
    echo "If you save $savingsPerYear each year you will have $$total when you retire<br><br>";

    for ($count = 1; $count <= $workYears; $count++) {
        $saved = $savingsPerYear * $count;
        echo "In year ", strval($year + $count), " you will have saved $$saved<br>";
    }

    $totalSavings = 0;
    $currentYear = $year;

    while ($totalSavings < 500000) {
        echo "In $currentYear you will have $$totalSavings<br>";
        $totalSavings = $savingsPerYear + $totalSavings;
        $currentYear++;
    }

    echo "You will reach $500,000 in $currentYear";

?>
