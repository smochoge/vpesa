<?php

$servername = "localhost";
$username = "root";
$password = "Stevo1010!";
$dbname = "contact_us";

// Create connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// Set error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
