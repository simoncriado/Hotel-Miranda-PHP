<?php
include "./resources/db/db.php";
require "vendor/autoload.php";
use eftec\bladeone\BladeOne;
$blade = new BladeOne();

$id = $_GET["id"];

$sql = "SELECT * FROM rooms WHERE id = ".$id.";";
$result = $conn->query($sql);

echo $blade->run("room-details", ["room" => $result->fetch_array()]);