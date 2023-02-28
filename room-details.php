<?php
include "./db.php";
require "vendor/autoload.php";
use eftec\bladeone\BladeOne;
$blade = new BladeOne();

$id = $_GET["id"];

$sql = "SELECT * FROM rooms WHERE id = ".$id.";";
$result = $conn->query($sql);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $checkIn = explode("-", $_POST["checkIn"]);
    $checkOut = explode("-", $_POST["checkOut"]);
    $checkIn = $checkIn[2] . "-" . $checkIn[1] . "-" . $checkIn[0];
    $checkOut = $checkOut[2] . "-" . $checkOut[1] . "-" . $checkOut[0];

    $sql = "SELECT bookings.status FROM bookings INNER JOIN rooms ON bookings.roomNumber = rooms.room_number WHERE rooms.id = ".$id." AND bookings.checkIn BETWEEN '".$checkIn."' AND '".$checkOut."' AND bookings.checkOut BETWEEN '".$checkIn."' AND '".$checkOut."';";
    $resultAvailability = $conn->query($sql);

    if ($resultAvailability->fetch_array()[0] == "Available") {
        echo $blade->run("room-details", ["room" => $result->fetch_array(),  "available" => 1]);
    }else{
        echo $blade->run("room-details", ["room" => $result->fetch_array(),  "available" => 2]);
    }
} else {
echo $blade->run("room-details", ["room" => $result->fetch_array(MYSQLI_ASSOC), "available" => "undefined"]);
}

$conn->close();