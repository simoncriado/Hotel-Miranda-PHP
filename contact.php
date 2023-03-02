<?php
include "./db.php";
require "vendor/autoload.php";
use eftec\bladeone\BladeOne;
$blade = new BladeOne();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contact = [
        "reviewID" => rand(0, 100000000),
        "date" => date("d-m-Y"),
        "name" => $_POST["name"],
        "email" => $_POST["email"],
        "phone" => $_POST["phone"],
        "comment" => $_POST["comment"],
        "stars" => rand(1, 5),
        "archived" => rand(0,1)
    ];

    $sql = "INSERT INTO reviews(reviewID, date, name, email, phone, comment, stars, archived) VALUES ('".$contact["reviewID"]."', '".$contact["date"]."', '".$contact["name"]."', '".$contact["email"]."', '".$contact["phone"]."', '".$contact["comment"]."', '".$contact["stars"]."', '".$contact["archived"]."' );";

    $conn->query($sql);

    $conn->close();
}

echo $blade->run("contact");