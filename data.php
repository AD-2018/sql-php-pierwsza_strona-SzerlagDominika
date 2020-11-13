<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="nav">
    <a class="link" href="https://github.com/AD-2018/sql-php-pierwsza_strona-SzerlagDominika">GitHub</a>
    <a class="link" href="index.php">Pracownicy</a>
    <a class="link" href="orgPracownicy.php">Pracownicy i Organizacja</a>
    <a class="link" href="funcAgregujace.php">Funkcje agregujące</a>
    <a class="link" href="data.php">Data i Czas</a>
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

echo("<br>Zad 1 <br>");
$sql = "SELECT *, DATE_FORMAT(data_urodzenia,'%W-%m-%Y') from pracownicy, organizacja where id_org=dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Dzial</th><th>Data urodzenia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td><td>'.$row['nazwa_dzial'].'</td><td>'.$row['data_urodzenia'].'</td>');
        echo('</tr>');
    }

echo('</table>');

echo("<h3> ZAD 2 </h3>");
    $sql1 = "SET lc_time_names = 'pl_PL'";
    $sql2 ="SELECT DATE_FORMAT(CURDATE(), '%W')as data";
    echo ("<li>".$sql."</li><br><br>");
    $result = mysqli_query($conn, $sql1);
    $result = mysqli_query($conn, $sql2);
    echo ('<table border = "1" class = "moja_tabelka">');
    echo ("<tr><th>data</th></tr>");
        while ($row = mysqli_fetch_assoc($result)) {
                echo ('<tr>');
                echo ('<td>'.$row["data"].'</td>');
                echo ('</tr>');
        }echo ('</table>');

echo('</table>');

echo("<br>Zad 3 <br>");
$sql = "select imie, date_format(data_urodzenia, '%W-%M-%Y') as data,  nazwa_dzial from pracownicy, organizacja where id_org=dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Dzial</th><th>Data urodzenia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td><td>'.$row['nazwa_dzial'].'</td><td>'.$row['data'].'</td>');
        echo('</tr>');
    }

echo('</table>');

echo("<br>Zad 4 <br>");
$sql = "SELECT curtime(4) as data";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Data</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['data'].'</td>');
        echo('</tr>');
    }

echo('</table>');

echo("<br>Zad 5 <br>");
$sql = "select imie, date_format(data_urodzenia, '%Y-%M-%W') as data,  nazwa_dzial from pracownicy, organizacja where id_org=dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Dzial</th><th>Data urodzenia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td><td>'.$row['nazwa_dzial'].'</td><td>'.$row['data'].'</td>');
        echo('</tr>');
    }

echo('</table>');

echo("<br>Zad 6 <br>");
$sql = "SELECT imie, DATEDIFF(CURDATE(),data_urodzenia)*24 as godziny, DATEDIFF(CURDATE(),data_urodzenia)*24*60 as minuty, nazwa_dzial FROM pracownicy, organizacja where
id_org=dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Dzial</th><th>Godziny</th><th>Minuty</th><th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td><td>'.$row['nazwa_dzial'].'</td><td>'.$row['godziny'].'</td><td>'.$row['minuty'].'</td>');
        echo('</tr>');
    }

echo('</table>');

echo("<br>Zad 7 <br>");
$sql = 'SELECT DATE_FORMAT("2002-05-16", "%j") as urodz';
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Data</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['urodz'].'</td>');
        echo('</tr>');
    }

echo('</table>');

echo("<br>Zad 8 <br>");
$sql = "select imie, DATE_FORMAT(data_urodzenia,'%W') as dzien,  nazwa_dzial from pracownicy, organizacja where id_org=dzial ORDER BY 
     CASE
          
          WHEN dzien = 'Poniedziałek' THEN 1
          WHEN dzien = 'Wtorek' THEN 2
          WHEN dzien = 'Środa' THEN 3
          WHEN dzien= 'Czwartek' THEN 4
          WHEN dzien = 'Piątek' THEN 5
          WHEN dzien = 'Sobota' THEN 6
          WHEN dzien = 'Niedziela' THEN 7
     END ASC";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Dzial</th><th>Data urodzenia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td><td>'.$row['nazwa_dzial'].'</td><td>'.$row['dzien'].'</td>');
        echo('</tr>');
    }

echo('</table>');

echo("<br>Zad 9 <br>");
$sql = "select Count(DATE_FORMAT(data_urodzenia, '%W')) as data from pracownicy, organizacja where id_org=dzial and (DATE_FORMAT(data_urodzenia, '%W')='Poniedziałek')";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Ilosc</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['data'].'</td>');
        echo('</tr>');
    }

echo('</table>');

echo("<br>Zad 10<br>");
$sql = "SELECT DATE_FORMAT(data_urodzenia,'%W') as dzien, count(date_format(data_urodzenia, '%W')) as Liczba FROM pracownicy GROUP BY dzien ORDER BY CASE

          WHEN dzien = 'Poniedziałek' THEN 1
          WHEN dzien = 'Wtorek' THEN 2
          WHEN dzien = 'Środa' THEN 3
          WHEN dzien = 'Czwartek' THEN 4
          WHEN dzien = 'Piątek' THEN 5
          WHEN dzien = 'Sobota' THEN 6
          WHEN dzien = 'Niedziela' THEN 7
          END ASC";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Dzień</th><th>Liczba</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['dzien'].'</td><td>'.$row['Liczba'].'</td>');
        echo('</tr>');
    }

echo('</table>');
?>
