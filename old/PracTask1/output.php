<?php
    echo '<link rel="stylesheet" href="style.css">';
    include("header.html");

    // getting data from post
    $name = $_POST["name"];
    $yearOfBirth = $_POST["yearOfBirth"];
    $foodCostPerWeek = $_POST["foodCostPerWeek"];
    $petType = $_POST["petType"];
    $hadBirthdayYet = $_POST["hadBirthdayYet"];

    // definition of animal expected living ages here
    $expectedLivingAges = array("Dog" => 12, "Cat" => 15, "Fish" => 5, "Bird" => 5);

    // looks up selected animal type in associative array
    $expectedLivingYears = $expectedLivingAges[$petType];

    // calculates an offset if the pet hasnt had it's birthday this year
    $ageOffset = $hadBirthdayYet ? 0 : 1;

    // if ($hadBirthdayYet) {
    //     $ageOffset = 0;
    // } else {
    //     $ageOffset = 1;
    // }
    // same meaning as the inline if statement above

    $age = 2021 - $yearOfBirth - $ageOffset;

    // other basic calculations
    $foodCostPerYear = $foodCostPerWeek * 51;
    $yearsLeftAlive = $expectedLivingYears - $age;

    if ($age >= $expectedLivingYears) {
        echo "<h1>Your $petType, $name is $age years old!</h1>";
        echo "<h2>It's food is expected to cost $$foodCostPerYear per year.</h1>";
        exit();
    }

    echo "<h2>Your $petType, $name is $age years old and is expected to live $expectedLivingYears years.</h1>";
    echo "<h3>Here's a breakdown of the cost of food for the rest of it's lifespan!</h3>";

    echo "<hr>";

    // breakdown for year by year cost of food
    $i = 0;
    $totalFoodCost = 0;

    while ($i < $yearsLeftAlive) {
        $totalFoodCost += $foodCostPerYear;
        echo "<h3>At the end of ". 2021 + $i . " (age of " . $age + $i . ") your total cost of food will be $$totalFoodCost</h3>";
        $i++;
    }

    echo "<hr>";
    echo "<h2>Your pet is expected to cost $$totalFoodCost in total over the next $yearsLeftAlive years.";

?>