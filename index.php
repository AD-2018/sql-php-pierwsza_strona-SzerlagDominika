<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Dominika Szerląg</title>
<link rel="apple-touch-icon" sizes="180x180" href="/ikonka/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/ikonka/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/ikonka/favicon-16x16.png">
<link rel="manifest" href="/ikonka/site.webmanifest">
</head>
<body>

  <div class="item baner">
<h3 class="imie">Dominika Szerląg 3Ti</h3>
<a class="link" href="https://github.com/AD-2018/sql-php-pierwsza_strona-SzerlagDominika">GitHub</a>
  </div>

  <div class="item nav">
    <a class="link" href="/Pracownicy/orgPracownicy.php">Pracownicy i Organizacja</a>
    <a class="link" href="/Pracownicy/funcAgregujace.php">Funkcje agregujące</a>
    <a class="link" href="/Pracownicy/data.php">Data i Czas</a>
    <a class="link" href="/Pracownicy/formularz.html">Formularz </a> 
    <a class="link" href="/Pracownicy/daneDoBazy.php">Do Bazy </a> 
    <a class="link" href="/Ksiazki/ksiazki.php">Ksiazki </a> 
    </div>
  
  <div class="item tabelki">
   <?php
require_once("lib.php");

echo("<br>Zad 1 <br>");
$sql = "SELECT * FROM pracownicy where dzial=2";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>Dzial</th><th>ID</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td><td>'.$row['id_pracownicy'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 2 <br>");
$sql = "SELECT * FROM pracownicy where (dzial=2) or (dzial=3)";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>Dzial</th><th>ID</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td><td>'.$row['id_pracownicy'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad 3 <br>");
$sql = "SELECT * FROM pracownicy where zarobki<30";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>Dzial</th><th>ID</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td><td>'.$row['id_pracownicy'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<br>Zad test <br>");
$sql = "SELECT * FROM pracownicy";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>Dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td><td>'.$row['dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
?>
  </div>
</body>
</html>

