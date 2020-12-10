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
echo('<label for="bibl_autor">Wybierz autora:</label>');

echo('<select id="bibl_autor">');
echo('"<option value="id_autor">".$row['id_autor']."</option>"');
echo('"<option value="autor">".$row['autor']."</option>"');
echo('</select>');

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

echo("<br>KSIĄŻKI I AUTORZY<br>");
$sql = "SELECT id_book, autor, tytul FROM bibl_book, bibl_tytul, bibl_autor WHERE bibl_tytul.id_tytul = bibl_book.id_tytul AND bibl_autor.id_autor = bibl_book.id_autor";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>ID BOOK</th><th>ID AUTOR</th><th>ID TYTUL</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_book'].'</td><td>'.$row['autor'].'</td><td>'.$row['tytul'].'</td>');
        echo('</tr>');
    }

echo('</table>');

?>
