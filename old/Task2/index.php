<?php
    include("header.inc.php");
?>

<div class="mainDiv">
    <form action="output.php" method="POST">
        <p>What is your name?<br><input type="text" name="name"></p>
        <p>What year were you born?<br><input type="number" name="yearOfBirth"></p>
        <p>How much money do you save a year?<br><input type="number" name="savingsPerYear"></p>
        <p>Have you had your birthday this year?<br>
            <input type="radio" name="hadBirthdayYet" value="yes">
            <label for="yes">Yes</label><br>
            <input type="radio" name="hadBirthdayYet" value="no">
            <label for="no">No</label><br>
        </p>
        <input type="submit" value="Submit">
    </form>
</div>
