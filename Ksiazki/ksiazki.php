<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/style.css">
<title>Dominika Szerląg</title>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
</head>
<body>
     <div class="item baner">
<h3 class="imie">Dominika Szerląg</h3>
<a class="link" href="https://github.com/AD-2018/sql-php-pierwsza_strona-SzerlagDominika">GitHub</a>
  </div>

<div class="nav">
    <a class="link" href="/index.php">Pracownicy</a>
    <a class="link" href="/Pracownicy/orgPracownicy.php">Pracownicy i Organizacja</a>
    <a class="link" href="/Pracownicy/funcAgregujace.php">Funkcje agregujące</a>
    <a class="link" href="/Pracownicy/data.php">Data i Czas</a>
    <a class="link" href="/Pracownicy/formularz.html">Formularz </a> 
    <a class="link" href="/Pracownicy/daneDoBazy.php">Do Bazy </a> 
    <a class="link" href="/Ksiazki/ksiazki.php">Ksiazki </a> 
</div>
   <div class="item tabelki">

   <h3>DODAJ AUTORA</h3>
	<form action="/Ksiazki/insertaut.php" method="POST">
		<p>Autor</p>
		<input type="text" name="autor"></br>
			<input type="submit" value="dodaj autora">
  </form>

  <br>
<h3>USUŃ AUTORA</h3>
<form action="/Ksiazki/delaut.php" method="POST">
   <input type="number" name="id"></br>
   <input type="submit" value="Usun">
</form>

  <br>

  <h3>DODAJ TYTUŁ</h3>
	<form action="/Ksiazki/inserttyt.php" method="POST">
		<p>Tytuł</p>
		<input type="text" name="tytul"></br>
			<input type="submit" value="dodaj tytuł">
  </form>
  <br>

  <h3>USUŃ TYTUŁ</h3>
<form action="/Ksiazki/deltyt.php" method="POST">
   <input type="number" name="id"></br>
   <input type="submit" value="Usun">
</form>

  <br>
      <?php
require_once ("../lib.php");

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

echo("<br>AUTORZY<br>");
$sql = "SELECT autor, id_autor FROM bibl_autor";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>AUTOR</th><th>ID</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['autor'].'</td><td>'.$row['id_autor'].'</td>');
        echo('</tr>');
    }

echo('</table>');

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

echo("<br>TYTUŁY<br>");
$sql = "SELECT tytul, id_tytul FROM bibl_tytul";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>TYTUŁ</th><th>ID</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['tytul'].'</td><td>'.$row['id_tytul'].'</td>');
        echo('</tr>');
    }

echo('</table>');

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
