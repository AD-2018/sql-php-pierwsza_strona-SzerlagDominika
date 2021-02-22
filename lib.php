<?php
$servername = $_SERVER["servername"];
$username = $_SERVER["user"];
$password = $_SERVER["pass"];
$dbname = $_SERVER["dbname"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>