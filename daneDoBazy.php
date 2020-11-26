<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Dane do Bazy</title>
</head>
<body>
	<h3>DODAJ PRACOWNIKA</h3>
	<form action="insert.php" method="POST">
	    <input type="text" name="imie">
			<input type="number" name="dzial"></br>
			<input type="number" name="zarobki"></br>
			<input type="date" name="data_urodzenia"></br>
			<input type="submit" value="dodaj pracownika">
	</form>
<br>
<h3>USUN PRACOWNIKA</h3>
<form action="delete.php" method="POST">
   <input type="number" name="id"></br>
   <input type="submit" value="Zapisz w zmiennej $_POST['id']">
</form>

</body>
</html>

<?php
require_once("lib.php");

echo("<br>Zad 1 <br>");
$sql = "SELECT * FROM pracownicy";
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
?>
