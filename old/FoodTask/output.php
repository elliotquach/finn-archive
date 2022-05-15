<?php
    include("header.html");
?>
<head>
    <link rel="stylesheet" href="style.css">
    <title>OnTheGoFOODS! Registration</title>
</head>
<body>
    <div class="subtitle">
        <h2>Thank you for signing up!</h2>
    </div>
</body>

<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $likesSweets = $_POST["likesSweets"];

    // evaluate whether or not user is elliable for coupon 
    $elligableForCoupon = $age > 15 ? True : False;

    if ($elligableForCoupon) {
        echo "<div class=\"result\">
            <h2>Here's a special offer just for you!</h2>
            <div class=\"side\">
            <img src=\"./img/popcorn.jpeg\" height=220>
            <div>
                <h3>$2 OFF</h3>
                <h2>With code: over15</h2>
            </div>
            </div>
        </div>";
    } else {
        echo "<div class=\"result\">
            <h2>Get older family to sign up for coupon discount!</h2>
        </div>";
    }
?>

<body>
    <div class="box">
        <img src="img/foodOnStick.jpg" height=400>
    </div>
</body>