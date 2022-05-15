<?php
    include("header.html");
?>
<head>
    <link rel="stylesheet" href="style.css">
    <title>OnTheGoFOODS! Registration</title>
</head>
<body>
    <div class="subtitle">
        <h2>Please enter your details below!</h2>
    </div>
    <div class="side">
        <div class="box">
            <form action="output.php" method="POST">
                <p><strong>Name</strong><br><input type="text" name="name"></p>
                <p><strong>Email</strong><br><input type="email" name="email"></p>
                <p><strong>Age</strong><br><input type="number" name="age"></p>
                <p><strong>Do you like sweet treats?</strong><br>
                    <input type="radio" name="likesSweets" value="yes">Yes
                    <input type="radio" name="likesSweets" value="no">No
                </p>
                <input type="Submit" value="Submit">
            </form>
        </div>
        <div class="box">
            <img src="img/sandwich.jpg" height=500>
        </div>
    </div>
    
</body>z