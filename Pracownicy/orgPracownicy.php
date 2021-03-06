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
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>nazwa dzialu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 2 <br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and (dzial=1 or dzial=4)";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>nazwa dzialu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 3 <br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and imie like '%a'";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>nazwa dzialu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
echo("<br>Zad 4 <br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and imie not like '%a'";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>nazwa dzialu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
echo("<h3> SORTOWANIE </h3>");

echo("<br>Zad 1 <br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial order by imie desc";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>nazwa dzialu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 2 <br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and dzial=3 order by imie asc";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>nazwa dzialu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 3 <br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and imie like '%a' order by imie asc";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>nazwa dzialu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 4 <br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and (imie like '%a') and (dzial=1 or dzial=3) order by imie asc";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>nazwa dzialu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 5 <br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and imie not like '%a' order by nazwa_dzial asc, zarobki asc";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>nazwa dzialu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<h3> LIMIT </h3>");
echo("<br>Zad 1 <br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and dzial=4 order by zarobki desc limit 2";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>nazwa dzialu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 2 <br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial and (imie like '%a') and (dzial=4 or dzial=2) order by zarobki desc limit 3";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>nazwa dzialu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 3 <br>");
$sql = "SELECT * FROM pracownicy, organizacja where id_org=dzial order by data_urodzenia asc limit 1";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Data urodzenia</th><th>nazwa dzialu</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['data_urodzenia'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
?>
      </div>
</body>
</html>


