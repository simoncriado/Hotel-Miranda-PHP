<?php
include "./db.php";
require "vendor/autoload.php";
use eftec\bladeone\BladeOne;
$blade = new BladeOne();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contact = [
        "date" => date("d-m-Y"),
        "name" => $_POST["customer"],
        "email" => $_POST["email"],
        "phone" => $_POST["phone"],
        "comment" => $_POST["comment"]];

    $sql = "INSERT INTO reviews(date, name, email, phone, comment) VALUES ('".$contact["date"]."', '".$contact["name"]."', '".$contact["email"]."', '".$contact["phone"]."', '".$contact["comment"]."');";

    $conn->query($sql);

    $conn->close();
}

echo $blade->run("contact");