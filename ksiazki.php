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
   <a class="link" href="formularz.html">Formularz </a> 
   <a class="link" href="daneDoBazy.php">Do Bazy </a> 
   <a class="link" href="ksiazki.php">Ksiazki </a> 
    <h3>Dominika Szerląg</h3>
</div>
</body>
</html>
<?php
require_once("lib.php");

echo("<br>Autorzy<br>");
$sql = "SELECT * FROM bibl_autor";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>ID</th><th>Autor</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_autor'].'</td><td>'.$row['autor'].'</td>');
        echo('</tr>');
    }

echo('</table>');

echo("<br>Tytuły<br>");
$sql = "SELECT * FROM bibl_tytul";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>ID</th><th>Tytuł</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_tytul'].'</td><td>'.$row['tytul'].'</td>');
        echo('</tr>');
    }

echo('</table>');

echo("<br><br>");
$sql = "SELECT * FROM bibl_book";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>ID BOOK</th><th>ID AUTOR</th><th>ID TYTUL</th><th>WYPOZ</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_book'].'</td><td>'.$row['id_autor'].'</td><td>'.$row['id_tytul'].'</td><td>'.$row['wypoz'].'</td>');
        echo('</tr>');
    }

echo('</table>');

?>
