<?php
    include("header.inc.php");

    $conn=mysqli_connect("localhost", "root" ,"");
    print_r($conn);
    

    $heightDB = array(
        "Mitch" => 179,
        "Finn" => 165,
        "Leo" => 170,
        "Petrea" => 171);

    $name = $_POST["name"];

    if (array_key_exists("height", $_POST)) {
        
    } else {
        
    }

?>
