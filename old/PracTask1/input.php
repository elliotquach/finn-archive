<?php
    echo "<link rel=\"stylesheet\" href=\"style.css\"";
    include("header.html");
?>

<h2>Welcome, please fill in your pet's details below!</h1>

<form action="output.php" method="POST">
    <p>What is your pet's name?</p>
    <input type="text" name="name">

    <p>What year was your pet born in?</p>
    <input type="number" name="yearOfBirth">

    <p>Has your pet had it's birthday this year?</p>
    <input type="radio" name="hadBirthdayYet" value="Yes">
    <label for="Yes">Yes</label><br>
    <input type="radio" name="hadBirthdayYet" value="No">
    <label for="No">No</label><br>

    <p>How much does your pet's food cost per week?</p>
    <input type="text" name="foodCostPerWeek">

    <p>What animal is your pet?</p>
    <input type="radio" name="petType" value="Dog">
    <label for="Dog">Dog</label><br>
    <input type="radio" name="petType" value="Cat">
    <label for="Cat">Cat</label><br>
    <input type="radio" name="petType" value="Fish">
    <label for="Fish">Fish</label><br>
    <input type="radio" name="petType" value="Bird">
    <label for="Bird">Bird</label><br>

    <br>
    <input type="Submit" value="Submit">
</form>