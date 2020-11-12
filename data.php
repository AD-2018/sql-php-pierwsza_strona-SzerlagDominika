<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-SzerlagDominika">GitHub</a>
<div class="nav">
    <a href="index.php">Pracownicy</a>
    <a href="orgPracownicy.php">Pracownicy i Organizacja</a>
    <a href="funcAgregujace.php">Funkcje agregujące</a>
    <a href="data.php">Data i Czas</a>
    <h3>Dominika Szerląg</h3>
</div>
</body>
</html>

<?php
require_once("lib.php");

echo("<br>Zad 1 <br>");
$sql = "select imie ,YEAR(CURDATE())-YEAR(data_urodzenia) as wiek, nazwa_dzial from pracownicy, organizacja where id_org=dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Wiek</th><th>Dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td><td>'.$row['wiek'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

echo('</table>');

echo("<br>Zad 2 <br>");
$sql = "select imie ,YEAR(CURDATE())-YEAR(data_urodzenia) as wiek, nazwa_dzial from pracownicy, organizacja where id_org=dzial and nazwa_dzial='serwis'";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Wiek</th><th>Dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td><td>'.$row['wiek'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

echo('</table>');

echo("<br>Zad 3 <br>");
$sql = "select sum(YEAR(CURDATE())-YEAR(data_urodzenia)) as wiek from pracownicy, organizacja where id_org=dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Suma</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['wiek'].'</td>');
        echo('</tr>');
    }

echo('</table>');

echo("<br>Zad 4 <br>");
$sql = "select sum(YEAR(CURDATE())-YEAR(data_urodzenia)) as wiek from pracownicy, organizacja where id_org=dzial and nazwa_dzial='handel'";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Suma</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['wiek'].'</td>');
        echo('</tr>');
    }

echo('</table>');

echo("<br>Zad 5 <br>");
$sql = "select sum(YEAR(CURDATE())-YEAR(data_urodzenia)) as wiek from pracownicy, organizacja where id_org=dzial and imie like '%a'";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Suma</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['wiek'].'</td>');
        echo('</tr>');
    }

echo('</table>');

echo("<br>Zad 6 <br>");
$sql = "select sum(YEAR(CURDATE())-YEAR(data_urodzenia)) as wiek from pracownicy, organizacja where id_org=dzial and imie not like '%a'";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Suma</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['wiek'].'</td>');
        echo('</tr>');
    }

echo('</table>');

echo("<br>Zad 7 <br>");
$sql = "select avg(YEAR(CURDATE())-YEAR(data_urodzenia)) as wiek, nazwa_dzial from pracownicy, organizacja where id_org=dzial group by dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Wiek</th><th>Dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['wiek'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

echo('</table>');

echo("<br>Zad 8 <br>");
$sql = "select sum(YEAR(CURDATE())-YEAR(data_urodzenia)) as wiek, nazwa_dzial from pracownicy, organizacja where id_org=dzial group by dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Wiek</th><th>Dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['wiek'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

echo('</table>');

echo("<br>Zad 9 <br>");
$sql = "select max(YEAR(CURDATE())-YEAR(data_urodzenia)) as wiek, nazwa_dzial, imie from pracownicy, organizacja where id_org=dzial group by dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Wiek</th><th>Dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td><td>'.$row['wiek'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

echo('</table>');

echo("<br>Zad 10 <br>");
$sql = "select min(YEAR(CURDATE())-YEAR(data_urodzenia)) as wiek, nazwa_dzial, imie from pracownicy, organizacja where (id_org=dzial) and (nazwa_dzial='handel' or 
nazwa_dzial='serwis') group by dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Wiek</th><th>Dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td><td>'.$row['wiek'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

echo('</table>');

echo("<br>Zad 11 <br>");
$sql = "select imie,DATEDIFF(CURDATE(),data_urodzenia) AS dni, nazwa_dzial, imie from pracownicy, organizacja where id_org=dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Wiek w dniach</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td><td>'.$row['dni'].'</td>');
        echo('</tr>');
    }

echo('</table>');

echo("<br>Zad 12 <br>");
$sql = "SELECT imie ,YEAR(CURDATE())-YEAR(data_urodzenia) as wiek, nazwa_dzial FROM pracownicy, organizacja where id_org=dzial and (imie not like '%a') order by 
data_urodzenia asc limit 1";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Wiek</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td><td>'.$row['wiek'].'</td>');
        echo('</tr>');
    }

echo('</table>');

echo("<h3>Formatowanie</h3>");
?>
