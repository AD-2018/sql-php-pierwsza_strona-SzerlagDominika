<?php
$servername = "mysql-dominikaszerlag.alwaysdata.net";
$username = "217134";
$password = "@dominika123";
$dbname = "dominikaszerlag_baza";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM pracownicy";
$result = mysqli_query($conn, $sql);

echo("<h3> WITAJ ŚWIECIE! :D</h3>");
echo("Jestem Dominika Szerląg");
?>
