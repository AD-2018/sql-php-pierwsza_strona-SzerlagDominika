<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="item baner">
<h3 class="imie">Dominika Szerląg</h3>
<a class="link" href="https://github.com/AD-2018/sql-php-pierwsza_strona-SzerlagDominika">GitHub</a>
  </div>

<div class="nav">
    <a class="link" href="index.php">Pracownicy</a>
    <a class="link" href="/Pracownicy/orgPracownicy.php">Pracownicy i Organizacja</a>
    <a class="link" href="/Pracownicy/funcAgregujace.php">Funkcje agregujące</a>
    <a class="link" href="/Pracownicy/data.php">Data i Czas</a>
    <a class="link" href="/Pracownicy/formularz.html">Formularz </a> 
    <a class="link" href="/Pracownicy/daneDoBazy.php">Do Bazy </a> 
    <a class="link" href="/Książki/ksiazki.php">Ksiazki </a> 
</div>
   <div class="item tabelki">
      <?php
require_once("lib.php");

echo ("<br>Autorzy<br>");
$sql = "SELECT * FROM bibl_autor";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


echo('<select name="Autor">');

    while($row=mysqli_fetch_assoc($result)){
        echo'<option value="'.$row['id_autor'].'">';
        echo($row['autor']);
        echo"</option>"; 
    }
echo('</select>');

echo("<br>");

echo ("<br>Tytuły<br>");
$sql = "SELECT * FROM bibl_tytul";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


echo('<select name="Tytul">');

    while($row=mysqli_fetch_assoc($result)){
        echo'<option value="'.$row['id_tytul'].'">';
        echo($row['tytul']);
        echo"</option>"; 
    }
echo('</select>');

echo("<br>");
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

      </div>
</body>
</html>
