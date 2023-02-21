<?php
include "./resources/db/db.php";
require "vendor/autoload.php";

use eftec\bladeone\BladeOne;

$blade = new BladeOne();

$sql = "SELECT * FROM rooms";
$result = $conn->query($sql);

echo $blade->run("rooms", ["rooms" => $result->fetch_all()]);

$conn->close();