<?php
$servername = "mysql-dominikaszerlag.alwaysdata.net";
$username = "217134";
$password = "@dominika123";
$dbname = "dominikaszerlag_baza";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM pracownicy";
$result = mysqli_query($conn, $sql);

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<h3> WITAJ ŚWIECIE! :D</h3>");
echo("Jestem Dominika Szerląg");
?>
