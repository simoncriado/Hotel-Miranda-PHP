<?php
include "./db.php";
require "vendor/autoload.php";
use eftec\bladeone\BladeOne;
$blade = new BladeOne();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $checkIn = explode("-", $_POST["checkIn"]);
    $checkOut = explode("-", $_POST["checkOut"]);
    $checkIn = $checkIn[2] . "-" . $checkIn[1] . "-" . $checkIn[0];
    $checkOut = $checkOut[2] . "-" . $checkOut[1] . "-" . $checkOut[0];


   
    // $sql = "SELECT DISTINCT rooms.* FROM rooms LEFT JOIN bookings ON rooms.room_number = bookings.roomNumber WHERE (bookings.checkin > '".$checkOut."' AND bookings.checkOut > '".$checkOut."' OR bookings.checkIn < '".$checkIn."' AND bookings.checkout < '".$checkIn."') OR bookings.id IS NULL;";
    $sql = "SELECT * FROM bookings WHERE ((bookings.checkin < '".$checkIn."' AND bookings.checkOut > '".$checkIn."') OR (bookings.checkIn > '".$checkIn."' AND bookings.checkout < '".$checkOut."') OR (bookings.checkIn < '".$checkOut."' AND bookings.checkout > '".$checkOut."') OR (bookings.checkIn < '".$checkIn."' AND bookings.checkout > '".$checkOut."'));";
    $result = $conn->query($sql);
    print_r($result->fetch_all());

    // echo $blade->run("rooms", ["rooms" => $result->fetch_all(MYSQLI_ASSOC)]);

    $conn->close();
} else {
    $sql = "SELECT * FROM rooms ORDER BY RAND() LIMIT 3;";
    $result = $conn->query($sql);

    echo $blade->run("index", ["rooms" => $result->fetch_all(MYSQLI_ASSOC)]);

    $conn->close();
}