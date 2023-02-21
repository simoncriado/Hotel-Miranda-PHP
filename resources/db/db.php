<?php
require "vendor/autoload.php";

// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();

// $servername = $_ENV['DB_HOST'];
// $username = $_ENV['DB_USER'];
// $password = $_ENV['DB_PASSWORD'];
// $dbname = $_ENV['DB_NAME'];

$conn = new mysqli("localhost", "hotelMirandaAdmin", "hotelmiranda123", "hotelmiranda");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}