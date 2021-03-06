<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/style.css">
<title>Dominika Szerląg</title>
<link rel="apple-touch-icon" sizes="180x180" href="/ikonka/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/ikonka/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/ikonka/favicon-16x16.png">
<link rel="manifest" href="/ikonka/site.webmanifest">
</head>
<body>

<div class="item baner">
<h3 class="imie">Dominika Szerląg</h3>
<a class="github" href="https://github.com/AD-2018/sql-php-pierwsza_strona-SzerlagDominika">GitHub</a>
  </div>

<div class="nav">
<?php include_once("../menu.php"); ?>
</div>
   <div class="item tabelki">
      <?php
require_once ("../lib.php");

echo("<br>Zad 1 <br>");
$sql = "SELECT sum(zarobki) as suma FROM pracownicy";
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
        echo('<td>'.$row['suma'].'</td>');
        echo('</tr>');
    }

echo('</table>');

echo("<br>Zad 2 <br>");
$sql = "SELECT sum(zarobki) as suma FROM pracownicy where imie like '%a'";
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
        echo('<td>'.$row['suma'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 3 <br>");
$sql = "SELECT sum(zarobki) as suma FROM pracownicy where imie not like '%a' and (dzial=2 or dzial=3)";
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
        echo('<td>'.$row['suma'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 4 <br>");
$sql = "SELECT avg(zarobki) as srednia FROM pracownicy where dzial=4";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Srednia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['srednia'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 5 <br>");
$sql = "SELECT avg(zarobki) as srednia FROM pracownicy where imie not like '%a' and (dzial=1 or dzial=2)";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Srednia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['srednia'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
echo("<br>Zad 6 <br>");
$sql = "SELECT count(imie) as ilu FROM pracownicy";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Ilu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['ilu'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
echo("<br>Zad 7 <br>");
$sql = "SELECT count(imie) as ilu FROM pracownicy where imie like '%a' and (dzial=1 or dzial=3)";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Ilu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['ilu'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 8 <br>");
$sql = "SELECT sum(zarobki) as suma FROM pracownicy where imie not like '%a'";
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
        echo('<td>'.$row['suma'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<h3> Group by </h3>");
echo("<br>Zad 1 <br>");
$sql = "SELECT dzial, sum(zarobki) as suma FROM pracownicy group by dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Dzial</th><th>Suma</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['dzial'].'</td><td>'.$row['suma'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 2 <br>");
$sql = "SELECT dzial, count(imie) as suma FROM pracownicy group by dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Dzial</th><th>Suma</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['dzial'].'</td><td>'.$row['suma'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 3 <br>");
$sql = "SELECT dzial, avg(zarobki) as suma FROM pracownicy group by dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Dzial</th><th>Suma</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['dzial'].'</td><td>'.$row['suma'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 4 <br>");
$sql = "SELECT sum(zarobki) as suma, if ((imie like '%a'), 'Kobiety', 'Mezczyzni') as 'grupa' FROM pracownicy group by grupa";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Grupa</th><th>Suma</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['grupa'].'</td><td>'.$row['suma'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 5 <br>");
$sql = "SELECT avg(zarobki) as suma, if ((imie like '%a'), 'Kobiety', 'Mezczyzni') as 'grupa' FROM pracownicy group by grupa";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Grupa</th><th>Srednia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['grupa'].'</td><td>'.$row['suma'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<h3> Having </h3>");
echo("<br>Zad 1 <br>");
$sql = "SELECT nazwa_dzial, avg(zarobki) as suma FROM pracownicy, organizacja where id_org=dzial group by dzial having avg(zarobki)<28";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Dzial</th><th>Srednia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['nazwa_dzial'].'</td><td>'.$row['suma'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 2 <br>");
$sql = "SELECT nazwa_dzial, avg(zarobki) as suma FROM pracownicy, organizacja where id_org=dzial and imie not like '%a' group by dzial having avg(zarobki)>30";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Dzial</th><th>Srednia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['nazwa_dzial'].'</td><td>'.$row['suma'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 3 <br>");
$sql = "SELECT nazwa_dzial, count(imie) as suma FROM pracownicy, organizacja where id_org=dzial group by dzial having count(imie)>3";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Dzial</th><th>Ilosc</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['nazwa_dzial'].'</td><td>'.$row['suma'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
?>
   </div>
</body>
</html>
