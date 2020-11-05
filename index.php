<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-SzerlagDominika">GitHub</a>

</body>
</html>

<?php
require_once("lib.php");

echo("Zad 1");
$sql = "SELECT * FROM pracownicy";
echo($sql);

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
