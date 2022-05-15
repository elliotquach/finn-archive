<?php
    include("header.inc.php");

    $name = $_POST["name"];
    $yearOfBirth = $_POST["yearOfBirth"];
    $hadBirthdayYet = $_POST["hadBirthdayYet"];
    $savingsPerYear = $_POST["savingsPerYear"];

    // the required amount of savings for retirement
    $requiredSavings = 500000;

    // turn hadBirthdayYet into a boolean because i want to
    $hadBirthdayYet = $hadBirthdayYet == "yes";

    // define age adjust which corrects for wrong age
    $ageAdjust = ($hadBirthdayYet ? 0 : 1);
    $age = 2021 - $yearOfBirth - $ageAdjust;
    
    // estimating retirement age of 67, calculate years until requirement
    $yearsUntilRetirement = 67 - $age;

    // calculate total savings by requirement
    $retirementSavings = $yearsUntilRetirement * $savingsPerYear;
    
    if ($retirementSavings < $requiredSavings) {
        // redirect to retry page if savings isn't enough
        header("Location: index.php");
        exit;
    }

    echo "<h2 class=mainDiv>You will have $$retirementSavings by retirement!</h2>";

?>