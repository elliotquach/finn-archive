<html>
    <body>
        <h1>How's your weather?</h1>
        <p>Please enter your information</p>

        <br>
        <br>

        <form action="CWeatherTaskOutput.php" method="POST">
            <p>City Name</p><br>
            <input type="text" name="city"><br>
            
            <br>

            <p>Month</p><br>
            <select name="month">
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select><br>

            <br>

            <p>Year</p><br>
            <input type="number" name="year"><br>
            
            <br>

            <input type="checkbox" name="weather[]" value="Rain">
            <p>Rain</p><br>
            <input type="checkbox" name="weather[]" value="Sunshine">
            <p>Sunshine</p><br>
            <input type="checkbox" name="weather[]" value="Clouds">
            <p>Clouds</p><br>
            <input type="checkbox" name="weather[]" value="Hail">
            <p>Hail</p><br>
            <input type="checkbox" name="weather[]" value="Sleet">
            <p>Sleet</p><br>
            <input type="checkbox" name="weather[]" value="Snow">
            <p>Snow</p><br>
            <input type="checkbox" name="weather[]" value="Wind">
            <p>Wind</p><br>

            <br>

            <input type="submit">
        </form>
    </body>
</html>
